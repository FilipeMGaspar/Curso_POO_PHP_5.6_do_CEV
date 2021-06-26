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
        $this->serverName = base64_encode($serverName);
    }

    private function getUserName() {
        return $this->userName;
    }
    private function setUserName($userName) {
        $this->userName = base64_encode($userName);
    }

    private function getPassword() {
        return $this->password;
    }
    private function setPassword($password) {
        $this->password = base64_encode($password);
    }

    //Criação da ligação á base de dados
    private function ligarDb() {
        $this->setServerName("localhost");
        $this->setUserName("root");
        $this->setPassword("");
    }
    
    public function ligacao() {
        $this->ligarDb();
        //Ciar a ligação 
        $conn = new mysqli(base64_decode($this->getServerName()), base64_decode($this->getUserName()), base64_decode($this->getPassword()));
        
        //Teste á coneção
        if ($conn->connect_error) {
            die("<p> A ligação á base de dados falhou: " . $conn->connect_error)."</p>";
        }else{
            echo "<p>Ligação á base de dados efetuada com sucesso!</p>";
        }
    }
    
    public function criarDB() {
         //Ciar a ligação 
        $conn = new mysqli(base64_decode($this->getServerName()), base64_decode($this->getUserName()), base64_decode($this->getPassword()));
        
        //Teste á coneção
        if ($conn->connect_error) {
            die("<p> A ligação á base de dados falhou: " . $conn->connect_error)."</p>";
        }else{
            echo "<p>Ligação á base de dados efetuada com sucesso!</p>";
        }
        
        //Criação da base de dados
        $sql = "CREATE DATABASE myDB";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }
    
       $conn->close();
    }
    /*
    *  // Create database
    *   $sql = "CREATE DATABASE myDB";
    *   if ($conn->query($sql) === TRUE) {
    *     echo "Database created successfully";
    *   } else {
    *     echo "Error creating database: " . $conn->error;
    *   }
    *
    *   $conn->close();
    */
}
