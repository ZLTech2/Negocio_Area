<?php
    namespace src\Controllers;
    use src\Services\PostService;

    class PostController{
        private $service;

        public function __construct(){
            $this->service = new PostService();
        }

        public function criarPost(){
            if(session_status()===PHP_SESSION_NONE){
                session_start();
            }
            // upload da imagem
            $foto =  $_FILES['imagem'] ?? null;
            if($foto && $foto['error'] ===0){
                $extensao = pathinfo($foto['name'], PATHINFO_EXTENSION);
                $nomeArquivo = time() . '_' . basename($foto['name']);
                $upload = __DIR__ . '/../../public/assets/uploads/';
                $uploadFile = $upload . $nomeArquivo;

                if(move_uploaded_file($foto['tmp_name'], $uploadFile)){
                    $src = "public/assets/uploads/" . $nomeArquivo;
                }else{
                    $src = null;
                }
                
            }else{
                $src =  null;
            }
           
            $nomeProduto = $_POST['nomeProduto'] ?? null;
            $descricaoProduto = $_POST['descricaoProduto'] ?? null;
            $preco = $_POST['preco'] ?? null;
            //mudar tudo pq n tem telefone ecnpj
            $cnpj = $_SESSION['cnpj'] ?? null;
            $telefone = $_SESSION['telefone'] ?? null;

            if($nomeProduto && $descricaoProduto && $preco){
                $this->service->criar($nomeProduto, $descricaoProduto, $preco, $src, $telefone, $cnpj);
                $_SESSION['descricaoProduto'] = $descricaoProduto;
                $_SESSION['preco'] = $preco;

                $response = ["status"=>"success", "msg"=>"Post cadastrado", "descricaoProduto"=>$descricaoProduto, "preco"=>$preco, "imagem"=>$src];
            }else{
                $response = ["status"=>"error", "msg"=>"Erro ao cadastrar post"];
            }
            echo json_encode($response);
        }

        public function mostrarPosts(){
            header("Content-Type: application/json");
            $posts = $this->service->listar();
            echo json_encode($posts);
        }
    }
?>