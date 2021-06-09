<?php
require_once 'Mamifero.php';

class Cachorro extends Mamifero {
    
    //Método abstracto sobrescrito
    public function emitirSom () {
        echo "Latir! 'ão, ão, ão!'";
    }
}
