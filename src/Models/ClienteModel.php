<?php
    namespace src\Models;
    
    class ClienteModel{
        private $nomeCliente;
        private $email;
        private $telefone;
        private $senha;

        public function __construct($nomeCliente, $email, $telefone, $senha)
        {
            $this->nomeCliente = $nomeCliente;
            $this->email = $email;
            $this->telefone = $telefone;
            $this->senha = $senha;
        }

        public function getNome(){
            return $this->nomeCliente;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function getSenha(){
            return $this->senha;
        }
    }
?>