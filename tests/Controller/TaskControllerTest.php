<?php

namespace Controller;

use App\Repository\TaskRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class TaskControllerTest extends WebTestCase
{
    /**
     * This method tests the list action of the application.
     */
    public function testListAction(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userAdmin = $userRepository->findOneByUsername('killiadmin');

        if (!$userAdmin) {
            $this->markTestSkipped('No users with this username were found.');
        }

        $client->loginUser($userAdmin);
        $client->request('GET', '/tasks');

        // Checks that the response status is 200 (ok)
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * Test the ListActionCheck method
     */
    public function testListActionCheck(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userAdmin = $userRepository->findOneByUsername('killiadmin');

        if (!$userAdmin) {
            $this->markTestSkipped('No users with this username were found.');
        }

        $client->loginUser($userAdmin);
        $client->request('GET', '/tasks/checks');

        // Checks that the response status is 200 (ok)
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * Test the create action of a task.
     */
    public function testCreateAction(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $taskRepository = static::getContainer()->get(TaskRepository::class);
        $userAdmin = $userRepository->findOneByUsername('killiadmin');

        if (!$userAdmin) {
            $this->markTestSkipped('No users with this username were found.');
        }

        $client->loginUser($userAdmin);
        $client->request('GET', '/tasks/create');
        self::assertResponseIsSuccessful();

        //Submit form for create a task
        $datasToTask = [
            'task_form[title]' => 'Mon titre de test',
            'task_form[content]' => 'Mon contenu de test',
        ];

        $client->submitForm('Ajouter', $datasToTask);

        // Checks that the response status is 302 (redirection)
        self::assertResponseRedirects('/tasks');

        // We check that the task has been created
        $createdTask = $taskRepository->findOneByTitle('Mon titre de test');
        $this->assertNotNull($createdTask);
        $this->assertEquals('Mon titre de test', $createdTask->getTitle());
        $this->assertEquals('Mon contenu de test', $createdTask->getContent());
    }

    /**
     * Test the edit action of a task.
     */
    public function testEditActionAsAdministrator(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $taskRepository = static::getContainer()->get(TaskRepository::class);
        $userAdmin = $userRepository->findOneByUsername('killiadmin');

        if (!$userAdmin) {
            $this->markTestSkipped('No users with this username were found.');
        }

        $client->loginUser($userAdmin);
        $task = $taskRepository->findOneByTitle('Mon titre de test');

        if (!$task) {
            $this->markTestSkipped('No task with this title was found.');
        }

        $client->request('GET', '/tasks/' . $task->getId() . '/edit');
        self::assertResponseIsSuccessful();

        //Submit form for edit the task
        $newDatasToTask = [
            'task_form[title]' => 'Mon titre de test modifié',
            'task_form[content]' => 'Mon contenu de test modifié',
        ];

        $client->submitForm('Modifier', $newDatasToTask);

        // Checks that the response status is 302 (redirection)
        self::assertResponseRedirects('/tasks');

        // We check that the task has been edited
        $editedTask = $taskRepository->findOneByTitle('Mon titre de test modifié');
        $this->assertNotNull($editedTask);
        $this->assertEquals('Mon titre de test modifié', $editedTask->getTitle());
        $this->assertEquals('Mon contenu de test modifié', $editedTask->getContent());
    }

    /**
     * Test the edit task action with access denied.
     */
    public function testEditTaskActionAccessDenied(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $taskRepository = static::getContainer()->get(TaskRepository::class);

        $userUnauthorized = $userRepository->findOneByUsername('killiuser');
        $task = $taskRepository->findOneByTitle('Mon titre de test modifié');

        if (!$task) {
            $this->markTestSkipped('No task with this title was found.');
        }

        if ($userUnauthorized) {
            $client->loginUser($userUnauthorized);
            $client->request('GET', '/tasks/' . $task->getId() . '/edit');

            self::assertResponseRedirects('/logout', 302);

            $client->followRedirect();
            self::assertResponseRedirects('/login');
        }
    }

    /**
     * Test the toggle action of a task.
     */
    public function testToggleTaskAction(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $taskRepository = static::getContainer()->get(TaskRepository::class);

        $userAdmin = $userRepository->findOneByUsername('killiadmin');

        if (!$userAdmin) {
            $this->markTestSkipped('No users with this username were found.');
        }

        $task = $taskRepository->findOneByTitle('Mon titre de test modifié');

        if (!$task) {
            $this->markTestSkipped('No task with this title was found.');
        }

        $client->loginUser($userAdmin);
        $initialStatus = $task->isDone();

        $client->request('GET', '/tasks/' . $task->getId() . '/toggle');
        self::assertResponseRedirects('/tasks');

        // Verifies that the task status has been switched
        $this->assertEquals(!$initialStatus, $task->isDone());
    }

    /**
     * Test the delete action of a task with access denied.
     */
    public function testDeleteTaskActionAccessDenied(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $taskRepository = static::getContainer()->get(TaskRepository::class);

        $userUnauthorized = $userRepository->findOneByUsername('killiuser');
        $task = $taskRepository->findOneByTitle('Mon titre de test modifié');

        if (!$task) {
            $this->markTestSkipped('No task with this title was found.');
        }

        if ($userUnauthorized) {
            $client->loginUser($userUnauthorized);
            $client->request('GET', '/tasks/' . $task->getId() . '/delete');

            self::assertResponseRedirects('/logout', 302);

            $client->followRedirect();
            self::assertResponseRedirects('/login');
        }
    }

    /**
     * Test the delete action of a task.
     */
    public function testDeleteTaskActionAsAdministrator(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $taskRepository = static::getContainer()->get(TaskRepository::class);

        $userAdmin = $userRepository->findOneByUsername('killiadmin');

        if (!$userAdmin) {
            $this->markTestSkipped('No users with this username were found.');
        }

        $task = $taskRepository->findOneByTitle('Mon titre de test modifié');

        if (!$task) {
            $this->markTestSkipped('No task with this title was found.');
        }

        $userUnauthorized = $userRepository->findOneByUsername('userUnauthorized');

        if ($userUnauthorized) {
            $client->loginUser($userUnauthorized);
            $client->request('GET', '/tasks/' . $task->getId() . '/delete');
            self::assertResponseStatusCodeSame(403);
        }

        $client->loginUser($userAdmin);
        $client->request('GET', '/tasks/' . $task->getId() . '/delete');
        self::assertResponseRedirects('/tasks');

        // We check that the task has been deleted
        $deletedTask = $taskRepository->findOneByTitle('Mon titre de test modifié');
        $this->assertNull($deletedTask);
    }
}
