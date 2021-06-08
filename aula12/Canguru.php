<?php
require_once 'Mamifero.php';

class Canguru extends Mamifero {
    //Método público
    public function usarBolsa() {
        echo "<p>Usando bolsa! </p>";
    }
    
    //Método abstracto sobrescrito
    public function locomever() {
        echo "<p>Saltando! &#X1F998</p>";
    }
}
