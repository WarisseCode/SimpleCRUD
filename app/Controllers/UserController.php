<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        $users = User::all();
        require_once __DIR__ . '/../Views/user.php';
    }

    public function store(array $data)
    {
        User::create($data);
        header('Location: /users');
    }
} 