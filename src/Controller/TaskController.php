<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskFormType;
use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TaskController extends AbstractController
{
    /**
     * List all tasks
     *
     * @param TaskRepository $taskRepository The TaskRepository instance
     * @return Response The response object
     */
    #[Route('/tasks', name: 'task_list')]
    public function listAction(
        TaskRepository $taskRepository
    ): Response
    {
        return $this->render('task/list.html.twig', [
            'tasks' => $taskRepository->findBy([], ['id' => 'DESC'])
        ]);
    }

    /**
     * Lists all checked tasks.
     *
     * @param TaskRepository $taskRepository The task repository
     * @return Response The response object
     */
    #[Route('/tasks/checks', name: 'task_check')]
    public function listActionCheck(
        TaskRepository $taskRepository
    ): Response
    {
        return $this->render('task/list.html.twig', [
            'tasks' => $taskRepository->findBy(['is_done' => true], ['id' => 'DESC'])
        ]);
    }

    /**
     * Create a new task
     *
     * @param Request $request The request object
     * @param EntityManagerInterface $em The EntityManagerInterface instance
     * @return RedirectResponse|Response The redirect response or response object
     */
    #[Route('/tasks/create', name: 'task_create')]
    public function createAction(
        Request                $request,
        EntityManagerInterface $em
    ): RedirectResponse|Response
    {
        $task = new Task();
        $user = $this->getUser();
        $form = $this->createForm(TaskFormType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task->setDone(0);
            $task->setCreatedAt(new \DateTimeImmutable());
            $task->setIdUser($user);

            $em->persist($task);
            $em->flush();

            $this->addFlash('success', 'La tâche a été bien été ajoutée.');
            return $this->redirectToRoute('task_list');
        }

        return $this->render('task/create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * Edit an existing task
     *
     * @param Task $task The task entity to be edited
     * @param Request $request The request object
     * @param EntityManagerInterface $em The EntityManagerInterface instance
     * @return RedirectResponse|Response The redirect response or response object
     */
    #[Route('/tasks/{id}/edit', name: 'task_edit')]
    public function editAction(
        Task $task,
        Request $request,
        EntityManagerInterface $em
    ): RedirectResponse|Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_logout');
        }

        $form = $this->createForm(TaskFormType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $this->addFlash('success', 'La tâche a bien été modifiée.');
            return $this->redirectToRoute('task_list');
        }

        return $this->render('task/edit.html.twig', [
            'form' => $form->createView(),
            'task' => $task,
        ]);
    }

    /**
     * Toggles the status of a task.
     *
     * @param Task $task The task to be toggled
     * @param EntityManagerInterface $em The entity manager
     * @return RedirectResponse Redirects to the task list page
     */
    #[Route('/tasks/{id}/toggle', name: 'task_toggle')]
    public function toggleTaskAction(
        Task                   $task,
        EntityManagerInterface $em
    ): RedirectResponse
    {
        $task->toggle(!$task->isDone());
        $em->flush();

        $this->addFlash('success', sprintf(
            'La tâche %s a bien été marquée comme faite.', $task->getTitle()
        ));

        return $this->redirectToRoute('task_list');
    }

    /**
     * Deletes a task.
     *
     * @param Task $task The task to be deleted
     * @param EntityManagerInterface $em The entity manager
     * @return RedirectResponse Redirects to the task list page
     */
    #[Route('/tasks/{id}/delete', name: 'task_delete')]
    public function deleteTaskAction(
        Task                   $task,
        EntityManagerInterface $em
    ): RedirectResponse
    {
        $user = $this->getUser();

        if ($user === null || (!$this->isGranted('ROLE_ADMIN') && $user !== $task->getIdUser())) {
            return $this->redirectToRoute('app_logout');
        }

        $em->remove($task);
        $em->flush();

        $this->addFlash('success', 'La tâche a bien été supprimée.');
        return $this->redirectToRoute('task_list');
    }
}
