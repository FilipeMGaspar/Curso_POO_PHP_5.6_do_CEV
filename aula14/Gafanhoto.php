<?php
require_once 'Pessoa.php';

class Gafanhoto extends Pessoa{
    //Atributos
    private $login;
    private $totoAssistido;
    
    //Método Construtor
    public function __construct($nome, $idade, $sexo, $login) {
        super($nome, $idade, $sexo);
        $this->login = $login;
        $this->totoAssistido = 0;
    }

    
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
