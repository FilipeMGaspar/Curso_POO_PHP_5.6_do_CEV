<?php

class ligaMySql {
    //Atributos
    private $serverName;
    private $userName;
    private $password;
    
    //Métodos Geter e seter
    private function getServerName() {
        return $this->serverName;
    }
    private function setServerName($serverName) {
        $this->serverName = $serverName;
    }

    private function getUserName() {
        return $this->userName;
    }
    private function setUserName($userName) {
        $this->userName = $userName;
    }

    private function getPassword() {
        return $this->password;
    }
    private function setPassword($password) {
        $this->password = $password;
    }

    //Criação da ligação á base de dados
    private function ligarDb() {
        $this->setServerName("localhost");
        $this->setUserName("root");
        $this->setPassword("");
    }
    
}
