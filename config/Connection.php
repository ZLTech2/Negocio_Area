<?php
    namespace config;
    use PDO;
    use PDOException;

    class Connection{
        private $username ='root';
        private $password = '';
        private $host = 'localhost';
        private $db_name = 'db_projeto1';
        public $conn;

        public function getConnection(){
            try{
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name",$this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $error){
                echo "Erro: ".$error->getMessage();
            }
            return $this->conn;
        }
    }
?>