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
}