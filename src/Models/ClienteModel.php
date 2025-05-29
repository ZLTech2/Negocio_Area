<?php
    namespace src\Models;
    
    class ClienteModel{
        private $nome;
        private $email;
        private $telefone;
        private $senha;

        public function __construct($nome, $email, $telefone, $senha)
        {
            $this->nome = $nome;
            $this->email = $email;
            $this->telefone = $telefone;
            $this->senha = $senha;
        }

        public function getNome(){
            return $this->nome;
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