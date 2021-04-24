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
    }
?>