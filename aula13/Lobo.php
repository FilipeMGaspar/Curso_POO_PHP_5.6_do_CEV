<?php
require_once 'Mamifero.php';

class Lobo extends Mamifero {
    //Método abstracto sobrescrito
    public function emitirSom() {
        echo "<p>Auuuuuuuuuuuu!<p>";
    }
}
