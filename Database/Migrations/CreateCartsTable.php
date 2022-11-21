<?php

namespace Database\Migrations;

use Databases\Connection;


final class CreateUsersTable extends connection
{
    public function handle() {
        require_once 'db.php';

        $queries = [
            "CREATE TABLE carts (
            ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            article VARCHAR(160) NOT NULL      
            )"
        ];
  

        $query = $this->connection->prepare($sql);
        $query->execute();
    }
}