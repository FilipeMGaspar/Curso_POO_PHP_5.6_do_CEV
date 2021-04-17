<?php
    class Caneta{
        public var $modelo;
        public var $cor;
        private var $ponta;
        protected var $carga;
        protected var $tampada;

        function rabiscar(){
            if($this->tampada == true){
                echo "<p>ERRO! Não posso rabiscar!</p>";
            }else{
                echo "<p>Estou rabiscando...</p>";
            }           
        }

        function tampar(){
            $this->tampada = true;
        }

        function destampar(){
            $this->tampada = false;
        }
    }
?>