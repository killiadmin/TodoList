<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    /**
     * List registered users
     *
     * @param UserRepository $userRepository
     * @return Response
     */
    #[Route('/users', name: 'user_list')]
    public function listAction(
        UserRepository $userRepository
    ): Response
    {
        return $this->render('user/list.html.twig', [
            'users' => $userRepository->findAll()
        ]);
    }

    /**
     * Edit a user
     *
     * @param User $user The user to edit
     * @param Request $request The HTTP request object
     * @param EntityManagerInterface $em The entity manager
     * @return RedirectResponse|Response
     */
    #[Route('/users/{id}/edit', name: 'user_edit')]
    public function editAction(
        User                        $user,
        Request                     $request,
        EntityManagerInterface      $em
    ): RedirectResponse|Response
    {
        $form = $this->createForm(RegistrationFormType::class, $user, ['add_password_fields' => false]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'The user has been modified');
            return $this->redirectToRoute('user_list');
        }

        return $this->render('user/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
            'is_edit' => true
        ]);
    }
}
