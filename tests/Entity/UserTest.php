<?php

namespace Entity;

use App\Entity\Task;
use App\Entity\User;
use Faker\Factory;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserTest extends KernelTestCase
{
    private UserPasswordHasherInterface $passwordHasher;

    protected function setUp(): void
    {
        self::bootKernel();
        $this->passwordHasher = self::getContainer()->get(UserPasswordHasherInterface::class);
    }

    public function testUserAttributes(): void
    {
        $faker = Factory::create();

        $user = new User();
        $email = $faker->unique()->safeEmail();
        $username = $faker->name();
        $password = $this->passwordHasher->hashPassword($user, 'password');
        $roles = ['ROLE_USER'];

        $user->setEmail($email);
        $user->setUsername($username);
        $user->setPassword($password);
        $user->setRoles($roles);

        $this->assertNull($user->getId());
        $this->assertEquals($email, $user->getEmail());
        $this->assertEquals($username, $user->getUsername());
        $this->assertEquals($password, $user->getPassword());
        $this->assertEquals($roles, $user->getRoles());
        $this->assertEquals($username, $user->getUserIdentifier());
    }

    public function testUserTasks(): void
    {
        $user = new User();
        $this->assertCount(0, $user->getTasks());

        $task1 = new Task();
        $task2 = new Task();
        $user->addTask($task1);
        $user->addTask($task2);

        $this->assertCount(2, $user->getTasks());
        $this->assertTrue($user->getTasks()->contains($task1));
        $this->assertTrue($user->getTasks()->contains($task2));

        $user->removeTask($task1);
        $this->assertCount(1, $user->getTasks());
        $this->assertFalse($user->getTasks()->contains($task1));
    }
}