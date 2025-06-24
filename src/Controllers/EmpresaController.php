<?php
namespace src\Controllers;
use src\Services\EmpresaService;

class EmpresaController{
    private $service;
    public function __construct(){
        $this->service = new EmpresaService();
    }

    public function criar(){

        $input = file_get_contents("php://input");
        $data = json_decode($input);

        $cnpj = $data->cnpj ?? null;
        $nomeEmpresa = $data->nomeEmpresa ?? null;
        $email = $data->email ?? null;
        $telefone = $data->telefone ?? null;
        $descricao = $data->descricao ?? null;
        $senha = $data->senha ?? null;
        
        if ($cnpj && $nomeEmpresa && $email && $telefone && $descricao && $senha) {
            $this->service->criar($cnpj, $nomeEmpresa, $email, $descricao, $telefone, $senha);
            $response = ["status" => "success", "msg" => "Conta cadastrada, clique no botão entrar para logar"];
        } else {
            $response = ["status" => "error", "msg" => "Dados incompletos!"];
        }
        echo json_encode($response);
    }
}
?>