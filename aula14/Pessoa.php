<?php

class Pessoa {
    //Atributos
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $esperiencia;
    
    //Método protegido da classe Pessoa
    protected function ganharExp($n) {
        $this->esperiencia += $n;
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

    public function getEsperiencia() {
        return $this->esperiencia;
    }
    public function setEsperiencia($esperiencia) {
        $this->esperiencia = $esperiencia;
    }

}
