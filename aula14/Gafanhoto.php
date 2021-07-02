<?php

class Gafanhoto {
    //Atributos
    private $login;
    private $totoAssistido;
    
    //Métodos Geter e Seter
    public function getLogin() {
        return $this->login;
    }
    public function setLogin($login) {
        $this->login = $login;
    }

    public function getTotoAssistido() {
        return $this->totoAssistido;
    }
    public function setTotoAssistido($totoAssistido) {
        $this->totoAssistido = $totoAssistido;
    }

    //Método Público
    public function viuMaisUm() {
        $this->totoAssistido ++;
    }
}
