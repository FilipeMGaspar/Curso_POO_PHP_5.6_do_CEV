<?php
    require_once "Controlador.php";

    class ControleRemoto implements Controlador{
        //Atributos
        private $volume;
        private $ligado;
        private $tocando; 

        //Métodos especiais
        function ControleRemoto(){//Método Construtor
            $this->volume = 50;
            $this-> ligado = false;
            $this->tocando = false;
        }    

        public function getVolume(){
            return $this->volume;
        }
        public function setVolume($vol){
            $this->volume = $vol;
        }   

        public function getLigado(){
            return $this->ligado;
        }
        public function setLigado($power){
            $this->ligado = $power;
        }

        public function getTocando(){
            return $this->tocando;
        }
        public function setTocando($reproducao){
            $this->tocando = $reproducao;
        }


        //Métodos abstratos
        public function ligar() {
            $this->setLigado(true);
        }

        public  function desligar() {
            $this->setLigado(false);
        }

        public  function abriMenu() {
            echo "<p>Está ligado?" . ($this->getLigado() ? "SIM" : "NÃO") . "</p>"
            echo"<p>Está tocando?" . ($this->getTocando() ? "SIM" : "NÃO" ). "</p>";
            echo "<p>Volume: ".$yhis->getVolume()."<p>";
            for($i = 0; $i <= &thus->getVolume(); $i += 10){
                echo "|";
            }
            echo "<br>";

        }

        public  function fecharMenu() {
            echo "<p>Fechando o menu....</p>";
        }

        public  function maisVolume() {
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }
        }

        public  function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 5);
            }
        }

        public  function ligarMudo(){
            if($this->getLigado() && &this->getVolume() > 0){
                $this->setVolume(0);
            }
        }

        public  function desligarMudo(){
            if($this->getLigado() && &this->getVolume() == 0){
                $this->setVolume(50);
            }
        }

        public  function play(){

        }

        public  function pause(){

        }
    }
?>