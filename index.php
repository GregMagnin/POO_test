<?php

use App\Controllers\AuthController;
use App\Controllers\StoreController;

session_start();
require_once './vendor/autoload.php';

if ( !isset($_SESSION["cart"]) ) {
    $_SESSION["cart"] = 0;
}

$auth = new AuthController();
$store = new StoreController();


switch (getUri()) {
    case '/':
        $auth->register();
        break;    
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
        $store->all();
        break;
    case '/error':
        $store->error();
        break;
    case '/logout':
        $auth->logout();
        break;
    case '/article':
        $store->show($_GET['id']);
        break;
    case '/panier': 
        $store->cart();
        break;
    case '/addCart':
            echo $store->addToCart();
            break;
}

?>

