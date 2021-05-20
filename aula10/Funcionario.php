<?php
require_once 'Pessoa.php';

class Funcionario {
    //Atributos
    private $setor;
    private $trabalhando;
    
    //Métodos Geters e Seters
    public function getSetor() {
        return $this->setor;
    }
    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }
    
    public function getTrabalhando() {
        return $this->trabalhando;
    }
    public function setSetor($setor) {
        $this->setor = $setor;
    }

}
