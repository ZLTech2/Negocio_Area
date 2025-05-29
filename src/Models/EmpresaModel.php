<?php
    namespace src\Models;
    class EmpresaModel{
        private $cnpj;
        private $nome_empresa;
        private $email;
        private $descricao;
        private $telefone;
        private $senha;

        public function __construct($cnpj, $nome_empresa,$email,$descricao, $telefone, $senha){
            $this->cnpj = $cnpj;
            $this->nome_empresa = $nome_empresa;
            $this->email = $email;
            $this->descricao = $descricao;
            $this->telefone = $telefone;
            $this->senha = $senha;
        }

        public function getCnpj(){
            return $this->cnpj;
        }
        public function getNome(){
            return $this->nome_empresa;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function getSenha(){
            return $this->senha;
        }
    }
?>