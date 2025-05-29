<?php
    namespace src\Models;

    class PostModel{
        private $nome_produto;
        private $descricao_produto;
        private $preco;
        private $telefone;
        private $imagem;
        private $cnpj;

        public function __construct($nome_produto, $descricao_produto, $preco,$imagem, $telefone, $cnpj){
            $this->nome_produto = $nome_produto;
            $this->descricao_produto = $descricao_produto;
            $this->preco = $preco;
            $this->imagem = $imagem;
            $this->telefone = $telefone;
            $this->cnpj = $cnpj;
        }

        public function getNome_produto(){
            return $this->nome_produto;
        }

        public function getDescricao_produto(){
            return $this->descricao_produto;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function getCnpj(){
            return $this->cnpj;
        }

        public function getImagem(){
            return $this->imagem;
        }
    }
?>