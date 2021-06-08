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
        echo "<p>Comendo frutas! &#X1F34E &#X1F352 &#X1F347</p>";
    }

    public function emitirSom() {
        echo "<p>Som de ave!</p>";
    }

    public function locomever() {
        echo "<p>Voando!</p>";
    }
    
    //Método publico
    public function fazerNinho(){
        echo "<p>Construiu um ninho! &#X1F423</p>";
    }
}
