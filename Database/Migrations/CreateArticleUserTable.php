<?php

namespace Database\Migrations;

use Database\Connection;


final class CreateArticleUserTable extends Connection
{
    public function handle() {

        $queries = 
            "CREATE TABLE article_user (
            article_id INT,
            user_id INT,
            PRIMARY KEY (article_id, user_id)
            )";
        $pdo = $this->connection;
        $query = $pdo->prepare($queries);
        $query->execute(); 
    }
}