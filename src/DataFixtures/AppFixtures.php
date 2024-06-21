<?php

namespace App\DataFixtures;

use App\Entity\Task;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        //Adding a Default Admin Account
        $userAdmin = new User();
        $userAdmin->setUsername('killiadmin');
        $userAdmin->setEmail('admin@todolist.fr');
        $userAdmin->setPassword($this->passwordHasher->hashPassword($userAdmin, 'password'));
        $userAdmin->setRoles(['ROLE_ADMIN']);
        $manager->persist($userAdmin);

        //Adding a Default User Account
        $userDefault = new User();
        $userDefault->setUsername('killiuser');
        $userDefault->setEmail('user@todolist.fr');
        $userDefault->setPassword($this->passwordHasher->hashPassword($userDefault, 'password'));
        $userDefault->setRoles(['ROLE_USER']);
        $manager->persist($userDefault);

        $faker = Faker\Factory::create();

        for ($j = 0; $j < 20; $j++) {
            $task = new Task();
            $task->setIdUser($userDefault);
            $task->setTitle($faker->text(80));
            $task->setContent($faker->text(500));
            $task->setDone($faker->boolean(80));
            $task->setCreatedAt(\DateTimeImmutable::createFromMutable($faker->dateTime()));
            $manager->persist($task);
        }

        // Creation of 50 users with 20 tasks associated
        for ($i = 0; $i < 50; $i++) {
            $user = new User();
            $user->setUsername($faker->name());
            $user->setEmail($faker->unique()->safeEmail());
            $user->setPassword($this->passwordHasher->hashPassword($user, "password"));
            $user->setRoles(['ROLE_USER']);
            $manager->persist($user);

            // Creation of 20 tasks
            for ($j = 0; $j < 20; $j++) {
                $task = new Task();
                $task->setIdUser($user);
                $task->setTitle($faker->text(80));
                $task->setContent($faker->text(500));
                $task->setDone($faker->boolean(80));
                $task->setCreatedAt(\DateTimeImmutable::createFromMutable($faker->dateTime()));
                $manager->persist($task);
            }
        }

        $manager->flush();
    }
}