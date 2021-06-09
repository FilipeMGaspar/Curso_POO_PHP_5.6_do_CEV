<?php
require_once 'Reptil.php';

class Tartaruga extends Reptil {
    //Método abstrato sobrescrito
    public function locomover() {
        echo "<p>Andando beeeem de devagar!  &#X1F422</p>";
    }
}
