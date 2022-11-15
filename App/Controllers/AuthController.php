<?php

namespace App\Controllers;
use App\Models\AuthModel;
use Respect\Validation\Validator as v;
require_once './vendor/autoload.php';



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
            $validUsername = v::alpha()->validate($username);
            $validPassword = v::alnum()->validate($password);
            if ($validUsername && $validPassword) {
            $task = new AuthModel();
            $task->createUser($username, $password);
            header ('Location:/login');
        }} else {
            header('Location:/error');
        }}

    public function logUser(): void {
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $task = new AuthModel();
            $user = $task->getUserByName($username);
            $id = $user["id"];
            $username = $user["username"];
            $hashed_password = $user["password"];
            if(password_verify($password, $hashed_password)){
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["user"] = $username;                            
            header("location: /homepage");
            exit();
            } else{
            header("location: /error");
            exit();
            }
    }}
public function logout() : void {
    session_destroy();
    require_once './views/login.html';
    }

}

