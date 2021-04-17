<?php
    class Caneta{
        private $marca;
        private $cor;
        private $ponta;
        private $carga;
        private $tampada;

        public function setMarca($nMarca){
            $this->marca = $nMarca;
        }
        public function getMarca(){
           // echo "Marca: " . $this->marca . "<br>";
            return $this->marca; 
        }

    }
?>