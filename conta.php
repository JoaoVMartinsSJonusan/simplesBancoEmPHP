<?php

    class ContaBancaria{

        private $numeroConta;
        private $saldo;
        private $dataContaCriada;
        private $senha;

        function __construct($numeroConta, $saldo, $dataContaCriada, $senha){
            $this->numeroConta = $numeroConta;
            $this->saldo = $saldo;
            $this->dataContaCriada = $dataContaCriada;
            $this->senha = $senha;
        }  

        public function getNumeroConta() {
            return $this->numeroConta;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function getDataContaCriada(){
            return $this->dataContaCriada;
        }

        public function getSenha() {
            return $this->senha;
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
            return "Conta: " . $this->numeroConta . ", Saldo: " . $this->saldo . ", Criada dia: " . $this->dataContaCriada;
        }
    }
        
?>