<?php

namespace Database\Migrations;

use Database\Connection;


final class AlterCartsTable extends Connection
{
    public function handle() {

        $queries = 
            "ALTER TABLE carts (
            ADD FOREIGN KEY (user_ID) REFERENCES users (ID)
            )";
        $pdo = $this->connection;
        $query = $pdo->prepare($queries);
        $query->execute(); 
    }
}


