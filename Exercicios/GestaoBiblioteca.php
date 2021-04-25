<?php
require_once 'Biblioteca.php';

class GestaoBiblioteca implements Biblioteca {
    private $numemprestimo;
    private $emprestado;
    
    public function __construct() {
        $this->emprestado = false;
        $this->numemprestimo = 0;
    }

    public function getNumemprestimo() {
        return $this->numemprestimo;
        $this->setNumemprestimo($this->getNumemprestimo() + 1);
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
    public function emprestarLivro() {
        $this->setEmprestado(true);
    }

    public function reberLivroEmprestado() {
        if($this->getEmprestado()){
            $this->setEmprestado(false);
        }   
    }      
}
