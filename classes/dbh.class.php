<?php

class Dbh {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "root";
    private $dbName = "testInventory";

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbName=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}