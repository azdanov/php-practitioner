<?php

namespace App\Controllers;

use App\Core\App;

/**
 * Class UsersController.
 */
class UsersController
{
    protected const USERS = 'users';

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
        $users = App::get('database')->selectAll($this::USERS);

        return view($this::USERS, compact('users'));
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
        App::get('database')->insert($this::USERS, [
            'name' => $_POST['name'],
        ]);

        redirect($this::USERS);
    }
}
