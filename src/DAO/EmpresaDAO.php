<?php
namespace src\DAO;
use config\Connection;
use PDO;
use src\Models\EmpresaModel;

class EmpresaDAO{
    public $conn;

    public function __construct(){
        $database = new Connection;
        $this->conn = $database->getConnection();
    }
    public function save(EmpresaModel $empresaModel){
        $sql = "INSERT INTO empresa(cnpj, nome_empresa, email, descricao, telefone, senha) VALUES (:cnpj,  :nome_empresa, :email, :descricao, :telefone, :senha) ";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':cnpj'=>$empresaModel->getCnpj(),
            ':nome_empresa'=>$empresaModel->getNome(),
            ':email'=>$empresaModel->getEmail(),
            ':descricao'=>$empresaModel->getDescricao(),
            ':telefone'=>$empresaModel->getTelefone(),
            ':senha'=>$empresaModel->getSenha(),
        ]);
    }

    public function buscarEmail($email){
        $sql = "SELECT * FROM empresa WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email',$email,PDO::PARAM_STR);
        $stmt ->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function buscarEmpresa($cnpj){
        $sql = "SELECT nome, descricao FROM empresa where cnpj = :cnpj";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':cnpj',$cnpj,PDO::PARAM_STR);
        $stmt ->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //criar query para select
}
?>