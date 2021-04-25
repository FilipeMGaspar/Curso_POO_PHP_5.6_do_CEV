<?php
require_once 'Biblioteca.php';

class GestaoBiblioteca {
    private $nomeAluno;
    private $nomeAutor;
    private $numemprestimo;
    private $emprestado;
    
    public function __construct() {
        $this->emprestado = false;
    }
    
    public function getNomeAluno() {
        return $this->nomeAluno;
    }
    public function setNomeAluno($nomeAluno) {
        $this->nomeAluno = $nomeAluno;
    }

    public function getNomeAutor() {
        return $this->nomeAutor;
    }
    public function setNomeAutor($nomeAutor) {
        $this->nomeAutor = $nomeAutor;
    }

    public function getNumemprestimo() {
        return $this->numemprestimo;
    }
     public function setNumemprestimo($numemprestimo) {
        $this->numemprestimo = $numemprestimo;
    }
    
    public function getEmprestado() {
        return $this->emprestado;
    }
    public function setEmprestado($emprestado) {
        $this->emprestado = $emprestado;
    }
    
    //Métodos abstractos
    
}
