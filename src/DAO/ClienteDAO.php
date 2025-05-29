<?php
    namespace src\DAO;
    use config\Connection;
    use PDO;
    use src\Models\ClienteModel;

    class ClienteDAO{
        public $conn;

        public function __construct()
        {
            $database = new Connection;
            $this->conn = $database->getConnection();
        }

        public function save(ClienteModel $clienteModel){
            $sql = "INSERT INTO cliente(nome, email, telefone, senha)
                    VALUES (:nome, :email, :telefone, :senha) ";
            $stmt = $this->conn->prepare($sql);
            
            $stmt->execute([
                ':nome'=>$clienteModel->getNome(),
                ':email'=>$clienteModel->getEmail(),
                ':telefone'=>$clienteModel->getTelefone(),
                ':senha'=>$clienteModel->getSenha()
            ]);
        }
    }
?>