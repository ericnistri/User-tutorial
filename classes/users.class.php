<?php

class Users extends Dbh{

    protected function getUser($name) {
        $sql = "SELECT * FROM testInventory.employee WHERE name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();

        return $results;
    }

    protected function setUser($name, $lastname, $email) {
        $sql = "INSERT INTO testInventory.employee (name, lastname, email) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $lastname, $email]);
    }

    
}