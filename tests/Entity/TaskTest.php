<?php
namespace Entity;

use App\Entity\Task;
use App\Entity\User;
use Faker\Factory;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class TaskTest extends KernelTestCase
{
    private UserPasswordHasherInterface $passwordHasher;

    protected function setUp(): void
    {
        self::bootKernel();
        $this->passwordHasher = self::getContainer()->get(UserPasswordHasherInterface::class);
    }

    public function getTaskEntity(): Task
    {
        $faker = Factory::create();

        $user = new User();
        $user->setUsername($faker->name())
            ->setEmail($faker->unique()->safeEmail())
            ->setPassword($this->passwordHasher->hashPassword($user, 'password'))
            ->setRoles(['ROLE_USER']);

        return (new Task())
            ->setTitle($faker->text(15))
            ->setContent($faker->text(150))
            ->setDone($faker->boolean(80))
            ->setCreatedAt(\DateTimeImmutable::createFromMutable($faker->dateTime()))
            ->setIdUser($user);
    }

    public function testTaskEntity(): void
    {
        $task = $this->getTaskEntity();

        $this->assertInstanceOf(Task::class, $task);
        $this->assertNotEmpty($task->getTitle());
        $this->assertNotEmpty($task->getContent());
        $this->assertInstanceOf(User::class, $task->getIdUser());
    }

    public function testGetId(): void
    {
        $task = new Task();
        $this->assertNull($task->getId());
    }

    public function testSetDoneAndIsDone(): void
    {
        $task = new Task();
        $task->setDone(true);
        $this->assertTrue($task->isDone());

        $task->setDone(false);
        $this->assertFalse($task->isDone());
    }

    public function testSetCreatedAtAndGetCreatedAt(): void
    {
        $task = new Task();
        $createdAt = new \DateTimeImmutable();
        $task->setCreatedAt($createdAt);
        $this->assertEquals($createdAt, $task->getCreatedAt());
    }

    public function testToggle(): void
    {
        $task = new Task();
        $task->toggle(true);
        $this->assertTrue($task->isDone());

        $task->toggle(false);
        $this->assertFalse($task->isDone());
    }
}
