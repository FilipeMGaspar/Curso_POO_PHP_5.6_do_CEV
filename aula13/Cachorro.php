<?php
require_once 'Lobo.php';

class Cachorro extends Lobo {
    
    //Método abstracto sobrescrito
    public function emitirSom() {
        echo "<p> $#X1F436 Au! Au! Au! </p>";        
    }
}