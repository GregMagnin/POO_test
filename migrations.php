<?php

require_once 'vendor/autoload.php';

$userTable = new \Databases\Migrations\CreateUsersTable();
$userTable->handle();