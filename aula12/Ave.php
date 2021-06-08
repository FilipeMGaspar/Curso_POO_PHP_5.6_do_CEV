<?php
require_once 'Animal.php';

class Ave extends Animal {
    //Atributos
    private $corPenas;
    
    //Métodos Geter e Seter
    public function getCorPenas() {
        return $this->corPenas;
    }
    public function setCorPenas($corPenas) {
        $this->corPenas = $corPenas;
    }

    //Métodos abstractos sobrescritos
    public function alimentar() {
        
    }

    public function emitirSom() {
        
    }

    public function locomever() {
        
    }
    
    //Método publico
    public function fazerNinho(){
        echo "<p>Construiu um ninho! &#X1F423</p>";
    }
}
