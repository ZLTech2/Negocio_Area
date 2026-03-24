<?php
    namespace config;
    use PDO;
    use PDOException;

    class Connection{
        private $config;
        public $conn;

        public function __construct()
        {
            $this->config = require __DIR__ . "/env.php";
        }

        public function getConnection(){
            try{
                $this->conn = new PDO("mysql:host={$this->config['host']};dbname={$this->config['db_name']};charset=utf8mb4",$this->config['username'], $this->config['password']);
            }catch(PDOException $error){
                echo "Erro: ".$error->getMessage();
            }
            return $this->conn;
        }
    }
?>