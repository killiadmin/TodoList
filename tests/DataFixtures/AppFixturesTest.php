<?php

namespace DataFixtures;

use PHPUnit\Framework\TestCase;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\DataFixtures\AppFixtures;
use App\Entity\User;
use App\Entity\Task;

class AppFixturesTest extends TestCase
{
    public function testLoad(): void
    {
        // Create mocks for dependencies
        $passwordHasher = $this->createMock(UserPasswordHasherInterface::class);
        $passwordHasher->method('hashPassword')->willReturn('hashed_password');

        $objectManager = $this->createMock(ObjectManager::class);

        // Capture persist calls
        $persistedEntities = [];
        $objectManager
            ->method('persist')
            ->willReturnCallback(function ($entity) use (&$persistedEntities) {
                $persistedEntities[] = $entity;
            });

        $objectManager->expects($this->once())
            ->method('flush');

        // Instantiate the fixtures and call the load method
        $fixtures = new AppFixtures($passwordHasher);
        $fixtures->load($objectManager);

        // Check persisted entities
        $this->assertNotEmpty($persistedEntities);

        // Verify admin user
        $adminUser = array_filter(
            $persistedEntities, static fn($entity) => $entity instanceof User && $entity->getUsername() === 'killiadmin'
        );

        $this->assertCount(1, $adminUser);
        $adminUser = reset($adminUser);
        $this->assertEquals('admin@todolist.fr', $adminUser->getEmail());
        $this->assertEquals('hashed_password', $adminUser->getPassword());

        // Check that 'ROLE_ADMIN' is present among the roles
        $this->assertContains('ROLE_ADMIN', $adminUser->getRoles());

        // Check users and tasks
        $users = array_filter(
            $persistedEntities, static fn($entity) => $entity instanceof User && $entity->getUsername() !== 'killiadmin'
        );

        $tasks = array_filter($persistedEntities, static fn($entity) => $entity instanceof Task);

        $this->assertCount(50, $users);
        $this->assertCount(1000, $tasks);

        // Check that a user has 20 associated tasks
        $user = reset($users);
        $userTasks = array_filter($tasks, static fn($task) => $task->getIdUser() === $user);
        $this->assertCount(20, $userTasks);
    }
}
