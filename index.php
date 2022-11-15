<?php

use App\Controllers\AuthController;

require_once './vendor/autoload.php';

$store = new AuthController();
switch (getUri()) {
    case '/login':
         $store->login();
        break;
    case '/register':
        $store->register();
        break;
    
    case '/registerUser':
        $store->registerUser();
        break;
}
