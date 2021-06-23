<?php

class conecao {
    //Atributos
    private $userName;
    private $dbName;
    private $password;
    
    //Métodos Geter e Seter
    public function getUserName() {
        return $this->userName;
    }
    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function getDbName() {
        return $this->dbName;
    }
    public function setDbName($dbName) {
        $this->dbName = $dbName;
    }

    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }


}
