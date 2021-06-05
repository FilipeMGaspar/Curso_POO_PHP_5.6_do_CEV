<?php
require_once 'Animal.php';

class Reptil extends Animal {
    //Atributos
    private $corEscama;
    
    //Metodos abstratos sobrescritos 
    public function alimentar() {
        
    }

    public function emitirSom() {
        
    }

    public function locomever() {
        
    }
    
    //Métodos Geter e Seter
    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

}
