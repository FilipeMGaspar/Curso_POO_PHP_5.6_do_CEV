<?php
require_once 'Animal.php';

class Peixe extends Animal {
    //Atributos
    private $corDeEscama;
    
    //Métodos Abstractos sobrescritos
    public function alimentar() {
        echo "<p>Comemdo substâncias!</p>";
    }

    public function emitirSom() {
        echo "<p>Peixe não faz som!</p>";
    }

    public function locomever() {
        echo "<p>Nadando!</p>";
    }
    
    //Métodos Geter e Seter
    public function getCorDeEscama() {
        return $this->corDeEscama;
    }
    public function setCorDeEscama($corDeEscama) {
        $this->corDeEscama = $corDeEscama;
    }

    //Métodos Públicos
    public function soltarBolha(){
        echo "<p>Soltou uma bolha! </p>";
    }

}
