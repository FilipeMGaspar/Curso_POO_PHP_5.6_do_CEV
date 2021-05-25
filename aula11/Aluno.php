<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa {
   //Atributos
    private $matricula;
    private $curso;
    
    //Métodos Geter e Seter
    public function getMatricula() {
        return $this->matricula;
    }
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    
    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }

    //Métodos públicos
    public function pagarMensalidade() {
        echo "<p>O aluno <strong>".$this->getNome()."</strong> pagou a mensalide!</p>";
    }
}
