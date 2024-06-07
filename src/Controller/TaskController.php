<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskFormType;
use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class TaskController extends AbstractController
{
    /**
     * Lists all tasks.
     *
     * @param TaskRepository $taskRepository The task repository
     * @param PaginatorInterface $paginator The paginator service
     * @param Request $request The request object
     * @return Response The response object
     */
    #[Route('/tasks', name: 'task_list')]
    public function listAction(
        TaskRepository     $taskRepository,
        PaginatorInterface $paginator,
        Request            $request
    ): Response
    {
        $query = $taskRepository->findBy([], ['id' => 'DESC']);

        $limit = 9;
        $page = max(1, $request->query->getInt('page', 1));

        $pagination = $paginator->paginate(
            $query,
            $page,
            $limit
        );

        return $this->render('task/list.html.twig', ['pagination' => $pagination]);
    }

    /**
     * Lists completed tasks.
     *
     * @param TaskRepository $taskRepository The task repository
     * @param PaginatorInterface $paginator The paginator
     * @param Request $request The request
     * @return Response The response
     */
    #[Route('/tasks/checks', name: 'task_check')]
    public function listActionCheck(
        TaskRepository     $taskRepository,
        PaginatorInterface $paginator,
        Request            $request
    ): Response
    {
        $query = $taskRepository->findBy(['isDone' => true], ['id' => 'DESC']);

        $limit = 9;
        $page = max(1, $request->query->getInt('page', 1));

        $pagination = $paginator->paginate(
            $query,
            $page,
            $limit
        );

        return $this->render('task/list.html.twig', ['pagination' => $pagination]);
    }

    /**
     * Displays the details of a task.
     *
     * @param int $id The ID of the task
     * @param TaskRepository $taskRepository The task repository
     * @return Response The response object
     *
     * @Route('/tasks/{id}', name='task_detail')
     */
    #[Route('/tasks/{id<\d+>}', name: 'task_detail')]
    public function detailAction(
        int            $id,
        TaskRepository $taskRepository
    ): Response
    {
        $task = $taskRepository->find($id);

        if (!$task) {
            return $this->redirectToRoute('task_list');
        }

        return $this->render('task/detail.html.twig', ['task' => $task]);
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
        Request $request,
        EntityManagerInterface $em
    ): RedirectResponse|Response {
        $task = new Task();
        $user = $this->getUser();
        $form = $this->createForm(TaskFormType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task->setDone(false);
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
        Task                   $task,
        Request                $request,
        EntityManagerInterface $em,
        UserInterface          $user
    ): RedirectResponse|Response
    {
        $taskUser = $task->getIdUser();

        if ($taskUser && $taskUser->getId() !== $user->getId() && !$this->isGranted('ROLE_ADMIN')) {
            $this->addFlash('error', 'Vous ne pouvez pas modifier cette tâche.');
            return $this->redirectToRoute('task_list');
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
        EntityManagerInterface $em,
        Request                $request
    ): RedirectResponse
    {
        $task->toggle(!$task->isDone());
        $em->flush();

        $this->addFlash('success', sprintf(
            'La tâche %s a bien été marquée comme faite.', $task->getTitle()
        ));

        $page = $request->query->get('page', 1);

        return $this->redirectToRoute('task_list', ['page' => $page]);
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
        EntityManagerInterface $em,
        Request                $request
    ): RedirectResponse
    {
        $user = $this->getUser();

        if ($user === null || (!$this->isGranted('ROLE_ADMIN') && $user !== $task->getIdUser())) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas éxecuter cette action');
        }

        $em->remove($task);
        $em->flush();

        $page = $request->query->get('page', 1);

        $this->addFlash('success', 'La tâche a bien été supprimée.');
        return $this->redirectToRoute('task_list', ['page' => $page]);
    }
}
