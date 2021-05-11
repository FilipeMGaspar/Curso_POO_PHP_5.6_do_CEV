<?php
require_once 'Lutador.php';

class Luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    //Métodos Públicos
    public function marcarLuta($l1, $l2){
        if(($l1->getCategoria() == $l2->getCategoria()) && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    
    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);//Número aleatório 0 1 2
            switch ($vencedor){
                case 0: //Empate
                    echo "<h3>Empate!</h3>";
                    $this->desafiado->empatarLuta();
                    $this-$this->desafiante->empatarLuta();
                    break;
                case 1: //Desefiado vence
                    echo "<h3>E o Vencedor é <strong>".$this->desafiado->getNome()."</strong></h3>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: //Desafiante vence
                    echo "<h3>E o vencedor é <strong>".$this->desafiante->getNome()."</strong></h3>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->ganharLuta();
                    break;
            }
        } else {
            echo "<h3>A Luta não pode acontecer!</h3>";
        }
    }
    
    //Métodos Getters e Setters
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }
    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }
    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }
    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

}
