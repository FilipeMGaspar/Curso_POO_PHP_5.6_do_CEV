<?php
class Aluno {
    //Atributos
    private $matr;
    private $curso;
    
    //Métodos Geters e Seters
    public function getMatr() {
        return $this->matr;
    }
    public function setMatr($matr) {
        $this->matr = $matr;
    }
    
    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }
    
    //Método Publico
    public function cancelarMatr() {
        echo "<h4>A sua matrícula foi cancelada!</h4>";
    }
}
