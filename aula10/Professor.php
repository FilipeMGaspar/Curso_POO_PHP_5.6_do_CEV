<?php
require_once 'Pessoa.php';

class Professor {
    //Atributos
    private $especialidade;
    private $salario;
    
    //Métodos Geters e Seters
    public function getEspecialidade() {
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }
    
    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }
    
    //Métodos públicos
    public function receberAumento(){
        
    }
}
