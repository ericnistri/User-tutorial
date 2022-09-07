<?php

class UsersContr extends Users {

  public function createUser($name, $lastname, $email) {
    $this->setUser($name, $lastname, $email);
  }
}