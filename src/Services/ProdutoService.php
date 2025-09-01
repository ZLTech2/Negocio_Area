<?php
    namespace src\Services;
    use src\DAO\ProdutoDAO;
    use src\Models\ProdutoModel;

    class ProdutoService{
        private $dao;

        public function __construct(){
            $this->dao = new ProdutoDAO();
        }

        public function criar($nomeProduto, $descricaoProduto, $preco,$imagem, $telefone, $cnpj){
            $post = new ProdutoModel($nomeProduto, $descricaoProduto, $preco, $imagem, $telefone, $cnpj);
            return $this->dao->save($post);
        }

        public function listar(){
            return $this->dao->list();
        }
    }
?>