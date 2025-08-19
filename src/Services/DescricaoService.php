<?php
    namespace src\Services;

    use src\DAO\DescricaoDAO;
    use src\Models\Descricao;

    class DescricaoService{
        private $dao;

        public function __construct(){
            $this->dao = new DescricaoDAO();
        }

        public function criar($descricao, $nomeEmpresa, $cnpj){
            $descricaoModel = new Descricao($descricao, $nomeEmpresa, $cnpj);
            return $this->dao->save($descricaoModel);
        }
    }
?>