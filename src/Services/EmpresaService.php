<?php
namespace src\Services;
use src\DAO\EmpresaDAO;
use src\Models\EmpresaModel;

class EmpresaService{
    private $dao;
    public function __construct(){
        $this->dao = new EmpresaDAO();
    }

    public function criar($cnpj, $nome_empresa, $email, $descricao, $telefone, $senha){
        $hash = password_hash($senha,PASSWORD_ARGON2ID);
        $empresa = new EmpresaModel($cnpj, $nome_empresa, $email, $descricao, $telefone, $hash);
        
        return $this->dao->save($empresa);
    }

    public function logar($email, $senha){
        $empresa = $this->dao->buscarEmail($email);
        if($empresa &&  is_array($empresa)&& password_verify($senha, $empresa['senha'])){
            return $empresa;    
        }
        return null;
    }

    public function buscar($cnpj){
        return $this->dao->buscarEmpresa($cnpj);
    }
}
?>