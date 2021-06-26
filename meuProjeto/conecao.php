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
    private function setUserName($userName) {
        $this->userName = $userName;
    }

    public function getDbName() {
        return $this->dbName;
    }
    private function setDbName($dbName) {
        $this->dbName = $dbName;
    }

    public function getPassword() {
        return $this->password;
    }
    private function setPassword($password) {
        $this->password = $password;
    }
    
    //Método Publico
    public function criarLigacao($user, $db, $psw) {
        $this->setUserName($user);
        $this->setDbName($db);
        $this->setPassword(base64_encode($psw));
        //base64_decode($string);
        //base64_encode($string);
    }
    
    public function verPassword() {
        echo "<p>password encriptada: ". $this->getPassword()."</p>";
        $pass = base64_decode($this->getPassword());
        echo "<p>Password desencriptada: $pass</p>";
        $pass = base64_decode($pass);
        echo "<p>A sua password sem encriptação: $pass</p>";
    }
}
