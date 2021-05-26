<?php
require_once 'Aluno.php';

class Bolsista extends Aluno {
    //Atributos
    private $bolsa;
    
    //Método público
    private function renovarBolsa() {
        echo "<p>Bolsa Renovada</p>";
    }
    
    public function pagarMensalidade() {
        echo "<p>$this->nome é bolsista! Então paga com desconto.";
    }


    //Métodos Geter e Seter
    public function getBolsa() {
        return $this->bolsa;
    }
    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }

    

}
