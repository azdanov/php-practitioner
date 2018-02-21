<?php

namespace App\Controllers;

use App\Core\App;

/**
 * Class UsersController.
 */
class UsersController
{
    /**
     * Show all users.
     *
     * @throws \Exception
     *
     * @return string
     *
     * @SuppressWarnings("unused")
     */
    public function index(): string
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    /**
     * Store a new user in the database.
     *
     * @throws \Exception
     *
     * @SuppressWarnings("super")
     */
    public function store(): void
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
        ]);

        redirect('users');
    }
}
