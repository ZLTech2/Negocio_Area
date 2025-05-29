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
        $nome_empresa = $data->nome_empresa ?? null;
        $email = $data->email ?? null;
        $telefone = $data->telefone ?? null;
        $descricao = $data->descricao ?? null;
        $senha = $data->senha ?? null;
        
        if ($cnpj && $nome_empresa && $email && $telefone && $descricao && $senha) {
            $this->service->criar($cnpj, $nome_empresa, $email, $descricao, $telefone, $senha);
            $response = ["status" => "success", "msg" => "Conta cadastrada, clique no botão entrar para logar"];
        } else {
            $response = ["status" => "error", "msg" => "Dados incompletos!"];
        }
        echo json_encode($response);
    }
}
?>