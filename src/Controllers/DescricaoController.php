<?php
    namespace src\Controllers;

    use src\Services\DescricaoService;
    use src\Services\EmpresaService;

    class DescricaoController{


        private $descricaoService;
        public function __construct(){
            $this->descricaoService = new DescricaoService();
        }

        public function salvar(){

            $input = file_get_contents("php://input");
            $data = json_decode($input);
            $nomeEmpresa = $data->nomeEmpresa ?? null;
            $descricao = $data->descricao ?? null;
            $cnpj = $_SESSION['cnpj'] ?? null;

            if($nomeEmpresa && $descricao){
                $this->descricaoService->criar($nomeEmpresa, $descricao, $cnpj);
                $response = ["status" => "success", "msg" => "Descrição atualizada com sucesso!"];
            }else{
                $response = ["status" => "success", "msg" => "Descrição atualizada com sucesso!"];
            }
            return json_encode($response);
        }
    }

?>