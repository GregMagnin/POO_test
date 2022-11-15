<?php

namespace App\Controllers;
use App\Models\AuthModel;

class AuthController {

    public function login(): string
    {
        return require './views/login.html';
    }

    public function register(): string
    {
        return require './views/register.html';
    }


    public function registerUser(): void {
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
        } else {
            echo ('Une des cases est vide.');
        }
        $task = new AuthModel();
        $task->createUser($username, $password);
        header ('Location:/login');
    }

    public function loginUser(): void {
        
    }
}
