<?php
require_once 'Animal.php';

class Mamifero extends Animal{
    //Atributos
    protected $corPelo;
    
    //Métodos abstractos sobrescritos    
     public function emitirSom() {
         echo "<p>Som de Mamídero!</p>";
    }

    //Métodos geter e seter
    public function getCorPelo() {
        return $this->corPelo;
    }
    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }


}
