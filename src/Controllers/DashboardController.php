<?php
namespace src\Controllers;
class DashboardController {

    public function dadosSessao() {
        $nomeEmpresa = $_SESSION['nomeEmpresa'] ?? '';
        $descricao = $_SESSION['descricao'] ?? '';

        $dados = [
            'nomeEmpresa' => $nomeEmpresa,
            'descricao' => $descricao
        ];

        header('Content-Type: application/json');
        echo json_encode($dados);
    }
}
