<?php
    class Caneta{
        public $marca;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        //Método Construtor
        function 

        //Métodos get e set para o atributo marca
        public function setMarca($nMarca){
            $this->marca = $nMarca;
        }
        public function getMarca(){
            return $this->marca; 
        }

        //Métodos get e set para o atributo cor
        public function setCor($color){
            $this->cor = $color;
        }
        public function getCor(){
            return $this->cor;
        }

        //Métodos get e set para o atributo ponta
        public function setPonta($dmPonta){
            $this->ponta = $dmPonta;
        }
        public function getPonta(){
            return $this->ponta;
        }

        //Métodos get e set para o atributo carga
        public function setCarga($qtCarga){
            $this->carga = $qtCarga;
        }
        public function getCarga(){
            return $this->carga;
        }

        //Métodos get e set para o atributo tampada
        private function setTampada($tampa){
            $this->tampada = $tampa;
        }
        public function getTampada(){
            return $this->tampada;
        }

        //Método para colocar a tampa na caneta 
        public function tampar(){
            $this->setTampada(true);
        }

        //Método para remover a tampa da caneta
        public function destampar(){
            $this->setTampada(false);
        }

    }
?>