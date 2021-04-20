<?php
    class ContaBanco {
        //Atributos
        public $numConta;
        protected $tipoConta;
        private $donoConta;
        private $saldoConta;
        private $statusConta; //Verdadeiro(true) conta aberta falso(false) conta fechada
        
        //Métodos especiais
        //Método Construtor
        public function ContaBanco(){
            $this->statusConta = false; //Conta fechada
            $this->saldoConta = 0;
        }

    }
?>