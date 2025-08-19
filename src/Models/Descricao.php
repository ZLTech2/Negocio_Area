<?php

    namespace src\Models;

    class Descricao {
        private $descricao;
        private $nomeEmpresa;
        private $cnpj;

        public function __construct($descricao, $nomeEmpresa = '', $cnpj = '') {
            $this->descricao = $descricao;
            $this->nomeEmpresa = $nomeEmpresa;
            $this->cnpj = $cnpj;
        }

        public function getNomeEmpresa() {
            return $this->nomeEmpresa;
        }

        public function setNomeEmpresa($nomeEmpresa) {
            $this->nomeEmpresa = $nomeEmpresa;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function getCnpj() {
            return $this->cnpj;
        }
        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }
    }
?>