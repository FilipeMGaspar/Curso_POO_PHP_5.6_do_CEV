<?php
require_once 'Lobo.php';

class Cachorro extends Lobo {
    
    //Método abstracto sobrescrito
    public function emitirSom() {
        echo "<p> Au! Au! Au! </p>";        
    }
}