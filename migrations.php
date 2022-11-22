<?php

require_once 'vendor/autoload.php';

$userTable = new \Database\Migrations\AlterCartsTable();
$userTable->handle();