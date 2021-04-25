<?php
require_once 'Biblioteca.php';

class GestaoBiblioteca implements Biblioteca {
    private $numemprestimo;
    private $emprestado;
    
    public function __construct() {
        $this->emprestado = false;
        $this->numemprestimo = 0;
    }

    private function getNumemprestimo() {
        return $this->numemprestimo;
    }
    private function setNumemprestimo($numemprestimo) {
        $this->numemprestimo = $numemprestimo;
    }
    
    private function getEmprestado() {
        return $this->emprestado;
    }
    private function setEmprestado($emprestado) {
        $this->emprestado = $emprestado;
        $this->setNumemprestimo($this->getNumemprestimo() + 1);
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
