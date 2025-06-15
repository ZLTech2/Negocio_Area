<?php
    namespace src\Services;
    use src\DAO\PostDAO;
    use src\Models\PostModel;

    class PostService{
        private $dao;

        public function __construct(){
            $this->dao = new PostDAO();
        }

        public function criar($nomeProduto, $descricaoProduto, $preco,$imagem, $telefone, $cnpj){
            $post = new PostModel($nomeProduto, $descricaoProduto, $preco, $imagem, $telefone, $cnpj);
            return $this->dao->save($post);
        }
    }
?>