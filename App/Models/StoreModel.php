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
        $sql = "INSERT INTO carts (user_ID, article_ID, price, user_name, article_name) VALUES ('$_SESSION[id]','$_GET[id]','$_GET[price]', '$_SESSION[user]', '$_GET[article_name]')";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        
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

  public function countArticlesCart() : int {
    $pdo = $this->connection;
    $sql="SELECT count(*) as cpt from carts";
    $query=$pdo->prepare($sql);
    $query->execute();
    $result=$query->fetch();
    $nbr_articles = $result['cpt'];
    return $nbr_articles;
    }
    
   public function PaginationCart(int $firstarticle, int $eachpage) : array {
       $pdo = $this->connection;
       $sql="SELECT * FROM carts ORDER BY price desc limit :firstarticle , :eachpage";
       $query=$pdo->prepare($sql);
       $query->bindValue(':firstarticle',$firstarticle,\PDO::PARAM_INT);
       $query->bindValue(':eachpage',$eachpage,\PDO::PARAM_INT);
       $query->execute();
       $items=$query->fetchAll();
       return $items;
     }

     

}

