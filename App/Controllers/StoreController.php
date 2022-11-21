<?php

namespace App\Controllers;
use App\Models\StoreModel;


class StoreController {
    
    public function home(): string
    {

        return require './views/homepage.php';
    }

    public function error(): string
    {
        return require './views/error.html';
    }

    public function show(string $id): int {
        $storeModel = new StoreModel();
        $article = $storeModel->get($id);
        return require './views/article.php';
    }

    public function all(): array {
        $storeModel = new StoreModel();
        $articles = $storeModel->all();
        return require './views/homepage.php';
    }

    public function cart(): string 
    {
        $storeModel = new StoreModel();
        $cart = $storeModel->addCart();
        return require './views/panier.php';
    }
    
}