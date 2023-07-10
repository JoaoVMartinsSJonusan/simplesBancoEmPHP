<?php

    require_once "conta.php";

    class Cliente{

        private $nome;
        private $cpf;
        private $email;

        private ContaBancaria $conta;

        function __construct($nome, $cpf, $email, $conta){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
            $this->conta = $conta;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }

        
        public function getCpf(){
            return $this->cpf;
        }

        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }

        public function setConta($conta){
            $this->conta = $conta;
        }
        public function getConta(){
            return $this->conta;
        }

        public function __toString() {
            return "Nome: " . $this->nome . ", Cpf: " . $this->cpf . ", Email: " . $this->email . "<br>" . "<br>" . $this->conta . "<br>";
        }

    }

?>
