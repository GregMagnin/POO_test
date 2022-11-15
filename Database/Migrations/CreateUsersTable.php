<?php

namespace Database\Migrations;

use Databases\Connection;


final class CreateUsersTable extends connection
{
    public function handle() {
        require_once 'db.php';

        $queries = [
            "CREATE TABLE users (
            ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            username VARCHAR(60) NOT NULL,
            password VARCHAR(255) NOT NULL
            )"
        ];
        
        $queries[1] =
            "CREATE TABLE articles (
            ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(50) NOT NULL,
            content VARCHAR(255) NOT NULL,           
            )"
        ;  

        $query = $this->connection->prepare($sql);
        $query->execute();
    }
}