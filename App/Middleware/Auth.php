<?php

namespace App\Middleware;

class Auth {
    static public function IsAuth() : bool {
if ($_SESSION["user"] != null) {
    header("Location:/homepage");
    die();
}
}
}