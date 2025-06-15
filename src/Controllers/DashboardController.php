<?php
namespace src\Controllers;
class DashboardController {

    public function dadosSessao() {
        $nome_empresa = $_SESSION['nome_empresa'] ?? '';
        $descricao = $_SESSION['descricao'] ?? '';

        $dados = [
            'nome_empresa' => $nome_empresa,
            'descricao' => $descricao
        ];

        header('Content-Type: application/json');
        echo json_encode($dados);
    }
}
