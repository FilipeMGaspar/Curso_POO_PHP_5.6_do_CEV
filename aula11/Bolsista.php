<?php
require_once 'Aluno.php';

class Bolsista extends Aluno {
    private $bolsa;
    
    private function renovarBolsa() {
        echo "<p>Bolsa Renovada</p>";
    }
}
