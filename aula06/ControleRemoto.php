<?php

    class ControleRemoto{
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

    }
?>