<?php

namespace src\DAO;
use src\Models\Descricao;
use PDO;
use config\Connection;

class DescricaoDAO{
    private $conn;
    public function __construct(){
        $database = new Connection;
        $this->conn = $database->getConnection();
    }

    public function save (Descricao $descricao){
        $sql = "INSERT INTO descricao(descricao, nomeEmpresa, cnpj) VALUES (:descricao, :nomeEmpresa, :cnpj)";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':descricao'=>$descricao->getDescricao(),
            ':nomeEmpresa'=>$descricao->getNomeEmpresa(),
            ':cnpj'=>$descricao->getCnpj()
        ]);
    }
}
?>