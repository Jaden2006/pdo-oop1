<?php

class Database {
    public $pdo;
    private $table = "gegevens";

    public function __construct($dbName = "user", $host= 'localhost:3307', $user = "root", $pass = ""){
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbName;", $user, $pass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    }
    public function insert($email, $password) {
        $stmt = $this->pdo->prepare("INSERT into $this->table (email, password) VALUES (?,?)");
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->execute([$email, $password]);
    }
}