<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    public function __construct(protected Security $security) {}
    /**
     * Registers a new user.
     *
     * @param Request $request The request object
     * @param UserPasswordHasherInterface $userPasswordHasher The user password hasher
     * @param Security $security The security service
     * @param EntityManagerInterface $entityManager The entity manager
     *
     * @return Response The response object
     */
    #[Route('/users/create', name: 'app_register')]
    public function register(
        Request                     $request,
        UserPasswordHasherInterface $userPasswordHasher,
        Security                    $security,
        EntityManagerInterface      $entityManager
    ): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user, ['add_password_fields' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if($form->has('roles')){
                $user->setRoles($form['roles']->getData());
            } else {
                $user->setRoles(['ROLE_USER']);
            }

            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('firstPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            if ($this->security->getUser()) {
                return $this->redirectToRoute('user_list');
            }

            return $security->login($user, 'form_login', 'main');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }
}
