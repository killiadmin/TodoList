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
     *
     * @return Response The response object
     */
    #[Route('/tasks', name: 'task_list')]
    public function listAction(
        TaskRepository $taskRepository
    ): Response
    {
        $tasks = $taskRepository->findAll();

        return $this->render('task/list.html.twig', [
            'tasks' => $tasks
        ]);
    }

    /**
     * Create a new task
     *
     * @param Request $request The request object
     * @param EntityManagerInterface $em The EntityManagerInterface instance
     *
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
}
