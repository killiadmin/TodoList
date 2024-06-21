<?php

namespace Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    /**
     * Test case for the `testListNoAuth` method.
     */
    public function testListNoAuth(): void
    {
        $client = static::createClient();
        $client->request('GET', '/users');

        // Checks that the response is a redirect with an explicit message
        self::assertTrue($client->getResponse()->isRedirect(), 'Expected redirection to login page.');
        // Follows redirect to simulate browser behavior
        $client->followRedirect();

        // Checks that the redirect route matches 'app_login'
        self::assertRouteSame('app_login');
        // Checks the status of the HTTP response from the login page
        self::assertEquals(200, $client->getResponse()->getStatusCode(), 'Expected HTTP status code 200 for login page.');
    }

    /**
     * Test case for the `testListAction` method.
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
        $client->request('GET', '/users');

        // Checks that the response status is 200 (ok)
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * Test case for the `testRegister` method.
     */
    public function testRegisterAsAdministrator(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userAdmin = $userRepository->findOneByUsername('killiadmin');

        if (!$userAdmin) {
            $this->markTestSkipped('No users with this username were found.');
        }

        $client->loginUser($userAdmin);
        $client->request('GET', '/users/create');

        // Test case where passwords match
        $datasToRegister = [
            'registration_form[username]' => 'userRandom1',
            'registration_form[firstPassword]' => 'password',
            'registration_form[secondPassword]' => 'password',
            'registration_form[email]' => 'userRandom1@todolist.fr',
            'registration_form[roles]' => ['ROLE_USER']
        ];

        $client->submitForm('Ajouter', $datasToRegister);

        // Check that the response status is 302 (redirection)
        self::assertResponseRedirects('/users', 302);

        // Follow the redirect to ensure the user was created successfully
        $client->followRedirect();

        // Now test case where passwords do not match
        $datasToRegister['registration_form[firstPassword]'] = 'password1';
        $datasToRegister['registration_form[secondPassword]'] = 'password2';

        $client->request('GET', '/users/create');
        $client->submitForm('Ajouter', $datasToRegister);

        // Check that the response status is 422 (Unprocessable Entity)
        self::assertResponseStatusCodeSame(422);

        // Check for the specific error message
        $this->assertStringContainsString('Passwords must match.', $client->getResponse()->getContent());
    }

    /**
     * Test case for the `testRegister` method.
     */
    public function testRegister(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $client->request('GET', '/users/create');

        // Test case where passwords match
        $datasToRegister = [
            'registration_form[username]' => 'userRandom',
            'registration_form[firstPassword]' => 'passwordRandom',
            'registration_form[secondPassword]' => 'passwordRandom',
            'registration_form[email]' => 'userRamdom@todolist.fr'
        ];

        $client->submitForm('Ajouter', $datasToRegister);

        // Check that the response status is 302 (redirection)
        self::assertResponseRedirects('/', 302);

        // Follow the redirect to ensure the user was created successfully
        $client->followRedirect();

        $createdUser = $userRepository->findOneByUsername('userRandom');
        self::assertContains('ROLE_USER', $createdUser->getRoles());
    }

    /**
     * Test the edit action
     */
    public function testEditAction(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);

        $userAdmin = $userRepository->findOneByUsername('killiadmin');
        $userDefault = $userRepository->findOneByUsername('userRandom1');

        if (!$userAdmin || !$userDefault) {
            $this->markTestSkipped('No users with this username were found.');
        }

        $client
            ->loginUser($userAdmin)
            ->request('GET', '/users/' . $userDefault->getId() . '/edit');

        // Define new data for the form submission
        $newDatasToUpdate = [
            'registration_form[username]' => 'killiupdate',
            'registration_form[email]' => 'killiupdate@todolist.fr',
            'registration_form[roles]' => ['ROLE_USER']
        ];

        $client->submitForm('Modifier', $newDatasToUpdate);

        // Checks that the response status is 302 (redirection)
        $client->followRedirects();
        self::assertResponseRedirects('/users', 302);

        $userDefaultUpdate = $userRepository->find($userDefault->getId());

        $this->assertNotNull($userRepository->findOneByEmail('killiupdate@todolist.fr'));
        $this->assertNull($userRepository->findOneByEmail('userRamdom1@todolist.fr'));
        $this->assertSame('killiupdate', $userDefaultUpdate->getUsername());
    }

    /**
     * Test the delete action
     */
    public function testDeleteAction(): void
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);

        $userAdmin = $userRepository->findOneByUsername('killiadmin');
        $userDefault = $userRepository->findOneByUsername('killiupdate');
        $userRandom = $userRepository->findOneByUsername('userRandom');

        if (!$userAdmin || !$userDefault) {
            $this->markTestSkipped('No users with this usernames were found.');
        }

        $userDefaultId = $userDefault->getId();
        $userRandomId = $userRandom->getId();

        $client
            ->loginUser($userAdmin)
            ->request('GET', '/users/' . $userDefaultId . '/delete');

        $client
            ->loginUser($userAdmin)
            ->request('GET', '/users/' . $userRandomId . '/delete');

        // Checks that the response status is 302 (redirection)
        $client->followRedirects();
        self::assertResponseRedirects('/users', 302);

        // Checks that the user has been deleted
        self::assertNull($userRepository->find($userDefaultId));
        self::assertNull($userRepository->find($userRandom));
    }
}
