<?php

    class ContaBancaria{

        private $numeroConta;
        private $saldo;

        function __construct($numeroConta, $saldo){
            $this->numeroConta = $numeroConta;
            $this->saldo = $saldo;
        }  

        public function getNumeroConta() {
            return $this->numeroConta;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        //adicionar saldo a conta
        public function addSaldo($valor){
            $this->saldo += $valor;
        }

        //sacar dinheiro com uma taxa de 5 reais
        public function remSaldo($valor){
            $this->saldo -= $valor + 5;
        }

        public function __toString() {
            return "Conta: " . $this->numeroConta . ", Saldo: " . $this->saldo;
        }
    }
        
?>