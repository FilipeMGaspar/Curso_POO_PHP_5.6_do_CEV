<?php
require_once 'Animal.php';

class Reptil extends Animal {
    //Atributos
    private $corEscama;
    
    //Metodos abstratos sobrescritos 
    public function alimentar() {
        echo "<p>Comando vegetais! &#X1F96C</p>";
    }

    public function emitirSom() {
        echo '<p>Som de Réptil!</p>'; 
    }

    public function locomever() {
        echo "<p>Rastejando</p>";
    }
    
    //Métodos Geter e Seter
    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

}
