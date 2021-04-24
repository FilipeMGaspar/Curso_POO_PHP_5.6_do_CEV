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

        }

        public  function desligar() {

        }

        public  function abriMenu() {

        }

        public  function fecharMenu() {

        }

        public  function maisVolum() {

        }

        public  function menosVolume(){

        }

        public  function ligarMudo(){

        }

        public  function desligarMudo(){

        }

        public  function play(){

        }
        
        public  function pause(){

        }
    }
?>