<?php

namespace App\Models;
use Database\Connection;

class StoreModel extends Connection {


public function get(int $id) : array {
    $pdo = $this->connection;
    $sql = 'SELECT * FROM articles WHERE id = :id';
    $statement = $pdo->prepare($sql);
    $statement->bindValue('id', $id, \PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch();
}

public function addCartToDb() : void {
        $pdo = $this->connection;
        $sql = "INSERT INTO article_user (user_id, article_id)";
        $statement = $pdo->prepare($sql);
        $statement->bindValue('user_id', $_SESSION['id'], \PDO::PARAM_INT);
        $statement->bindValue('article_id', $_GET['id'], \PDO::PARAM_INT);
        $statement->execute(); 
      }

public function getArticlesForUser() : array|bool {
  $pdo = $this->connection;
  $sql = "SELECT a.name, a.content, a.image, a.price FROM articles as a INNER JOIN article_user as au ON a.ID = au.article_id INNER JOIN users as u ON au.user_id = $_SESSION[id]";
  $statement = $pdo->prepare($sql);
  $statement->execute();
  return $statement->fetch();
}


public function countArticles() : int {
 $pdo = $this->connection;
 $sql="SELECT count(*) as cpt from articles";
 $query=$pdo->prepare($sql);
 $query->execute();
 $result=$query->fetch();
 $nbr_articles = $result['cpt'];
 return $nbr_articles;
 }
 
public function Pagination(int $firstarticle, int $eachpage) : array {
    $pdo = $this->connection;
    $sql="SELECT * FROM articles ORDER BY price desc limit :firstarticle , :eachpage";
    $query=$pdo->prepare($sql);
    $query->bindValue(':firstarticle',$firstarticle,\PDO::PARAM_INT);
    $query->bindValue(':eachpage',$eachpage,\PDO::PARAM_INT);
    $query->execute();
    $items=$query->fetchAll();
    return $items;
  }

}

