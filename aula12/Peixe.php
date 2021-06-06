<?php
require_once 'Animal.php';

class Peixe {
    //Atributos
    private $corDeEscama;
    
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
