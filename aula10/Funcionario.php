<?php
require_once 'Pessoa.php';

class Funcionario extends Pessoa {
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
    
    //Métodos públicos
    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }
}
