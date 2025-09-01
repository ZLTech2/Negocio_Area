<?php
    namespace src\DAO;

    use PDO;
    use src\Models\ProdutoModel;
    use config\Connection;

    class ProdutoDAO{
        public $conn;
        
        public function __construct(){
            $database = new Connection;
            $this->conn = $database->getConnection();
        }

        public function save(ProdutoModel $postModel){
            $sql = "INSERT INTO produtos (nomeProduto, descricaoProduto, preco, imagem, telefone, cnpj) 
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
        public function list(){
            $sql = "SELECT descricaoProduto, preco, imagem FROM produtos ORDER BY idPost DESC LIMIT 1";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        // excluir posts
        public function delete(){
            $sql = "DELETE FROM produtos WHERE idPost = :idPost";
        }

        // editar posts
        public function edit(){
            
        }
    }
?>