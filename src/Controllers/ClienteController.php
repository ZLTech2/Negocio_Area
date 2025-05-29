<?php
    namespace src\Controllers;
    use src\Services\ClienteService;

    class ClienteController{
        private $service;
        public function __construct(){
            $this->service = new ClienteService();
        }

        public function cadastrarCliente(){
            $input = file_get_contents("php://input");
            $data = json_decode($input);

            $nome = $data->nome ?? null;
            $email = $data->email ?? null;
            $telefone = $data->telefone ?? null;
            $senha = $data->senha ?? null;

            if($nome && $email && $telefone && $senha){
                $this->service->criar($nome, $email, $telefone, $senha);
                $response = ["status"=>"success","msg"=>"Conta cadastrada, clique no botão entrar para logar"];
            }else{
                $response = ["status"=>"error","msg"=>"Dados incompletos"];
            }
            echo json_encode($response);
        }
    }
?>