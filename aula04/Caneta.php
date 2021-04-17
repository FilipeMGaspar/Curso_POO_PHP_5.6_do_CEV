<?php
    class Caneta{
        private $marca;
        private $cor;
        private $ponta;
        private $carga;
        private $tampada;

        public setMarca($nMarca){
            $this->marca = $nMarca;
        }
        public getMarca(){
            return $this->marca; 
        }

    }
?>