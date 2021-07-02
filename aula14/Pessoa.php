<?php

abstract class Pessoa {
    //Atributos
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;
    
    //Método construtor
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }

    
    //Método protegido da classe Pessoa
    protected function ganharExp($n) {
        $this->experiencia += $n;
    }
    
    //Métodos Geter e Seter
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getExperiencia() {
        return $this->experienciaperiencia;
    }
    public function setExperiencia($esperiencia) {
        $this->experiencia = $esperiencia;
    }

}
