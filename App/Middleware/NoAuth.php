<?php

namespace App\Middleware;

class NoAuth {
    static public function IsNotAuth() : bool {
if ($_SESSION["user"] === null) {
    header("Location:/login");
    die();
}
}
}