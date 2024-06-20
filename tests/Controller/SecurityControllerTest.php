<?php

namespace Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    /**
     * This test ensures that when a user is not authenticated and tries to access the homepage,
     * they are redirected to the login page with a 302 redirection status code.
     */
    public function testLogin(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');

        // Check redirect to login page (302 redirection)
        self::assertResponseRedirects('/login', 302);
    }

    /**
     * This test ensures that when a user logs out, they are redirected to the login page
     * and are no longer authenticated.
     */
    public function testLogout(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $user = $userRepository->findOneByUsername('killiadmin');

        if (!$user) {
            $this->markTestSkipped('No user with the username "killiadmin" found.');
        }

        $client->loginUser($user);
        $client->request('GET', '/logout');

        self::assertResponseRedirects('/login', 302);

        $client->followRedirect();
        $client->request('GET', '/');

        // Verify that the response is a redirect to the login page, meaning that the user is not authenticated
        self::assertResponseRedirects('/login');
    }
}