<?php
    namespace src\Models;
    class EmpresaModel{
        private $cnpj;
        private $nomeEmpresa;
        private $email;
        private $descricao;
        private $telefone;
        private $senha;

        public function __construct($cnpj, $nomeEmpresa,$email,$descricao, $telefone, $senha){
            $this->cnpj = $cnpj;
            $this->nomeEmpresa = $nomeEmpresa;
            $this->email = $email;
            $this->descricao = $descricao;
            $this->telefone = $telefone;
            $this->senha = $senha;
        }

        public function getCnpj(){
            return $this->cnpj;
        }
        public function getNome(){
            return $this->nomeEmpresa;
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