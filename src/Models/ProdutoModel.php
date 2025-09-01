<?php
    namespace src\Models;

    class ProdutoModel{
        private $nomeProduto;
        private $descricaoProduto;
        private $preco;
        private $telefone;
        private $imagem;
        private $cnpj;

        public function __construct($nomeProduto, $descricaoProduto, $preco,$imagem, $telefone, $cnpj){
            $this->nomeProduto = $nomeProduto;
            $this->descricaoProduto = $descricaoProduto;
            $this->preco = $preco;
            $this->imagem = $imagem;
            $this->telefone = $telefone;
            $this->cnpj = $cnpj;
        }

        public function getNome_produto(){
            return $this->nomeProduto;
        }

        public function getDescricao_produto(){
            return $this->descricaoProduto;
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