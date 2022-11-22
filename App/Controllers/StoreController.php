<?php

namespace App\Controllers;
use App\Models\StoreModel;


class StoreController {


    public function error(): string
    {
        return require './views/error.html';
    }

    public function show(string $id): int {
        $storeModel = new StoreModel();
        $article = $storeModel->get($id);
        return require './resources/views/article.php';
    }

    public function all(): int {
        $currentpage = $_GET['page']??'1';
        $storeModel = new StoreModel();
        $nbr_articles = $storeModel->countArticles();
        $eachpage = 3;
        $pages = ceil($nbr_articles / $eachpage);
        $firstarticle = ($currentpage * $eachpage) - $eachpage;
        $items = $storeModel->Pagination($firstarticle, $eachpage);
        return require './resources/views/homepage.php';
    }

    public function cart(): string 
    {
        $storeModel = new StoreModel();
        $cart = $storeModel->addCart();
        return require './resources/views/panier.php';
    }
    

}