<?php
require_once 'Mamifero.php';

class Canguru extends Mamifero {
    //Método público
    public function usarBolsa() {
        echo "<p>Usando bolsa! </p>";
    }
    public function locomever() {
        echo "<p>Saltando! </p>";
    }
}
