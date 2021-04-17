<?php
    class Caneta{
        private $marca;
        private $cor;
        private $ponta;
        private $carga;
        private $tampada;

        //Métodos get e set para o atributo marca
        public function setMarca($nMarca){
            $this->marca = $nMarca;
        }
        public function getMarca(){
            return $this->marca; 
        }

        //Métodos get e set para o atributo cor
        public function setCor($color){
            $this->cor = color;
        }
        public function getCor(){
            return $this->cor;
        }

        
    }
?>