<?php

namespace App\Models;
use Database\Connection;

class AuthModel extends Connection {
    public function createUser(string $username, string $password): void {
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $query=$this->connection->prepare($sql);
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT); 
        $query->bindParam(":username", $param_username, \PDO::PARAM_STR);
        $query->bindParam(":password", $param_password, \PDO::PARAM_STR);
        $query->execute();
    }

    public function getUserByName(string $username): array {
        $sql = "SELECT id, username, password FROM users WHERE username = :username"; 
        $query = $this->connection->prepare($sql);
        $query->bindParam(":username", $username, \PDO::PARAM_STR);
        $query->execute();
        $row = $query->fetch();
        return $row;    
    }
}