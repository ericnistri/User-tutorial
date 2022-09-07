<?php

class Test extends Dbh {
    public function getUsers() {
        $sql = "SELECT * FROM testInventory.employee";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
          echo $row['name'] . "\t" . $row['lastname'] . "\t" . $row['email'] . '<br>';
        }
      }

    public function getUsersStmt($name, $lastname) {
        $sql = "SELECT * FROM testInventory.employee WHERE name = ? AND lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $lastname]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['name'] . "\t" .$name['lastname'] . '<br>';
        }
    }


    public function setUsersStmt($name, $lastname, $email) {
        $sql = "INSERT INTO testInventory.employee (name, lastname, email) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $lastname, $email]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['name'] . $name['lastname']. $name['email'] . '<br>';
        }
    }
    
}