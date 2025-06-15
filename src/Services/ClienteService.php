<?php
    namespace src\Services;
    use src\DAO\ClienteDAO;
    use src\Models\ClienteModel;

    class ClienteService{
        private $dao;

        public function __construct()
        {
            $this->dao = new ClienteDAO();
        }

        public function criar($nomeCliente, $email, $telefone, $senha){
            $hash = password_hash($senha, PASSWORD_ARGON2ID);
            $cliente = new ClienteModel($nomeCliente, $email, $telefone, $hash);
            return $this->dao->save($cliente);
        }
    }
?>