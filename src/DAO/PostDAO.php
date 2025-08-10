<?php
    namespace src\DAO;

    use PDO;
    use src\Models\PostModel;
    use config\Connection;

    class PostDAO{
        public $conn;
        
        public function __construct(){
            $database = new Connection;
            $this->conn = $database->getConnection();
        }

        public function save(PostModel $postModel){
            $sql = "INSERT INTO post (nomeProduto, descricaoProduto, preco, imagem, telefone, cnpj) 
            VALUES (:nomeProduto, :descricaoProduto, :preco, :imagem, :telefone, :cnpj)";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':nomeProduto'=>$postModel->getNome_produto(),
                ':descricaoProduto'=>$postModel->getDescricao_produto(),
                ':preco'=>$postModel->getPreco(),
                ':imagem'=>$postModel->getImagem(),
                ':telefone'=>$postModel->getTelefone(),
                ':cnpj'=>$postModel->getCnpj()
            ]);
        }

        // listar todos os posts
        public function list($cnpj){
            $sql = "SELECT descricaoProduto, preco, imagem FROM post WHERE cnpj = :cnpj ORDER BY idPost DESC";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':cnpj'=> $cnpj
            ]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function findById($idPost){
            $sql = "SELECT * FROM post where idPost = :idPost";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':idPost' => $idPost
            ]);
            if($stmt->rowCount() > 0){
                return $stmt->fetch(PDO::FETCH_ASSOC);
            }
        }

        // excluir posts
        public function delete(){
            $sql = "DELETE FROM post WHERE idPost = :idPost";
        }

        // editar posts
        public function edit(){
            
        }
    }
?>