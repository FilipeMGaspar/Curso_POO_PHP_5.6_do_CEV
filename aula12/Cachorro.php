<?php
require_once 'Mamifero.php';

class Cachorro extends Mamifero {
    
    //Método abstracto sobrescrito
    public function emitirSom () {
        echo "<p>Latir! 'ão, ão, ão!'</p>";
    }
    
    //Métodos públicos
    public function enterrarOsso() {
        echo "<p>Enterrando o Osso! &#X1F9B4</p>";
    }
    
    public function abanarRabo() {
        echo "<p>Abanando o Rabo! &#X1F415</p>";
    }
}
