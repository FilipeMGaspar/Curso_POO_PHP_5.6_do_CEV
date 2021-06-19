<?php
require_once 'Mamifero.php';

class Lobo extends Mamifero {
    //Método abstracto sobrescrito
    public function emitirSom() {
        echo "<p>Auuuuuuuuuuuu! &#X1F43A<p>";
    }
}
