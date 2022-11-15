<?php

use App\Controllers\AuthController;
use App\Controllers\StoreController;

session_start();
require_once './vendor/autoload.php';

$auth = new AuthController();
$store = new StoreController();
switch (getUri()) {
    case '/login':
         $auth->login();
        break;
    case '/register':
        $auth->register();
        break;
    
    case '/registerUser':
        $auth->registerUser();
        break;
    case '/logUser':
       echo $auth->logUser();
        break;
    case '/homepage':
        $store->home();
        break;
    case '/error':
        $store->error();
        break;
    case '/logout':
        $auth->logout();
        break;
}