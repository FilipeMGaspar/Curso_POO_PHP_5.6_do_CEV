<?php
    class ContaBanco {
        //Atributos
        public $numConta;
        protected $tipoConta;
        private $donoConta;
        private $saldoConta;
        private $statusConta; //Verdadeiro(true) conta aberta falso(false) conta fechada
        
        //Métodos especiais
        
        public function ContaBanco(){//Método Construtor
            $this->saldoConta = 0;
            $this->statusConta = false; //Conta fechada            
        }

        //Método Get e set para o atributo numConta
        public function getNumConta(){
            return $this->numConta;
        }    
        public function setNumConta($nrConta){
            $this->numConta = $nrConta;
        }

        //Método Get e set para o atributo tipoConta
        public function getTipoConta(){
            return $this->tipoConta;
        }
        public function setTipoConta($tipo){
            $this->tipoConta = $tipo;
        }

        //Método Get e set para o atributo donoConta (Nome do 1º titular)
        public function getDonoConta(){
            return $this->donoConta;
        }
        public function setDonoConta($titularConta){
            $this->donoConta = $titularConta;
        }
    }
?>