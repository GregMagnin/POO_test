<?php

namespace App\Models;
use Database\Connection;

class StoreModel extends Connection {

public function all() : array {
    $pdo = $this->connection;
    $sql = 'SELECT * FROM articles';
    return $pdo->query($sql)->fetchAll();

}

public function get(int $id) : array {
    $pdo = $this->connection;
    $sql = 'SELECT * FROM articles WHERE id = :id';
    $statement = $pdo->prepare($sql);
    $statement->bindValue('id', $id, \PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch();
}

public function addCart(string $name, string $content, string $image, ) : array {
    function createArticle (): void {
        require './database/db.php';
        $sql = "INSERT INTO articles (title, description) VALUES ('$title', '$description')";
        $query = $connection->prepare($sql);
        $query->execute();
      }
}


}
