<?php

namespace Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    /**
     * This test ensures that when a user is not authenticated and tries to access the homepage,
     * they are redirected to the login page with a 302 redirection status code.
     */
    public function testIndexNotAuthenticated(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');

        // Check redirect to login page (302 redirection)
        self::assertResponseRedirects('/login', 302);
    }

    /**
     * Test case to verify that the homepage is displayed when authenticated.
     */
    public function testIndexAuthenticated(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $user = $userRepository->findOneByUsername('killiadmin');

        if (!$user) {
            $this->markTestSkipped('No users with this username were found.');
        }

        $client->loginUser($user);
        $client->request('GET', '/');

        // Verify that the response is successful
        self::assertResponseIsSuccessful();
    }
}
