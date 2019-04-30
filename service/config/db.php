<?php
//database configuration

class Database {

    private $host = "localhost";
    private $db = "lab8";
    private $user = "ReadingList";
    private $pass = "";
    private $charset = "utf8mb4";

    public $pdo;

    public function getConnection(){

        $this->pdo = null;

        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $this->pdo = new PDO($dsn, $this->user, $this->pass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $this->pdo;
    }
}
?>