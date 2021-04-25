<?php
    require_once 'Controlador.php';

    class ControleRemoto implements Controlador {
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

        private function getVolume(){
            return $this->volume;
        }
        private function setVolume($vol){
            $this->volume = $vol;
        }   

        private function getLigado(){
            return $this->ligado;
        }
        private function setLigado($power){
            $this->ligado = $power;
        }

        private function getTocando(){
            return $this->tocando;
        }
        private function setTocando($reproducao){
            $this->tocando = $reproducao;
        }


        //Métodos abstratos
        public function ligar() {
            $this->setLigado(true);
        }

        public function desligar() {
            $this->setLigado(false);
        }

        public function abrirMenu() {
            echo "<h3> ..: MENU :.. </h3>";
            echo "<p>Está ligado? " . ($this->getLigado() ? "SIM" : "NÃO") . "</p>";
            echo"<p>Está tocando? " . ($this->getTocando() ? "SIM" : "NÃO" ). "</p>";
            echo "<p>Volume: ".$this->getVolume()."<p>";
            for($i = 0; $i <= $this->getVolume(); $i += 10){
                echo "|";
            }
            echo "<br>";

        }

        public function fecharMenu() {
            echo "<p>Fechando o menu....</p>";
        }

        public function maisVolume() {
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }else{
                echo "<p>ERRO não posso aumentar o volume. Tv desligada!</p>";
            }
        }

        public function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 5);
            }
        }

        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }

        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }
        }

        public function play(){
            if($this->getLigado() && !($this->getTocando())){
                $this->setTocando(true);
            }
        }

        public function pause(){
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }
    }
?>