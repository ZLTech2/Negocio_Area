<?php
    namespace src\Controllers;
    use src\Services\EmpresaService;
    session_start();
    class LoginController{
        private $service;
        public function __construct(){
            $this->service = new EmpresaService();
        }

        public function login(){
            $input = json_decode(file_get_contents('php://input'), true);
            $email = $input['email'] ?? null;
            $senha = $input['senha'] ?? null;

            if(!$email || !$senha){
                http_response_code(400);
                echo json_encode(['status'=>'error', 'msg'=> 'Email e senha são obrigatórios.']);
                return;
            }

            $empresa = $this->service->logar($email, $senha);
            if($empresa){
                unset($empresa['senha']);
                echo json_encode(['status'=>'success', 'user'=> $empresa]);
                $_SESSION['email'] = $empresa['email'];
                // dados para o post
                $_SESSION['cnpj'] = $empresa['cnpj'];
                $_SESSION['telefone'] = $empresa['telefone'];

                // dados para mudar a descrição e nome da empresa
                $_SESSION['nomeEmpresa'] = $empresa['nomeEmpresa'];
                $_SESSION['descricao'] = $empresa['descricao'];
            } else {    
                http_response_code(401);
                echo json_encode(['error' => 'email ou senha inválidos.']);
            }
        }
    }
?>