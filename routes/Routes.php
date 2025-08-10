<?php

    // define o nomespace da classe, para evitar conflitos com pastas do mesmo nome
    namespace routes;
    class Routes{

        // o array armazena todas as rotas no index.php, contendo metodo(POST, GET), caminho(url) e ação(método da classe controller)
        private $routes = [];

        // acttion é o que vai ser executado, por exemplo um save
        public function add($method, $path, $action){
            $this->routes[]=[
                'method'=>$method,
                'path'=>$path,
                'action'=>$action
            ];
            error_log("Rota registrada" . json_encode(end($this->routes)));
        }

        public function handleRequest(){
            // pega a requisição (POST, GET, PUT)
            $method = $_SERVER['REQUEST_METHOD'];

            // pega o caminho base, por exemplo, se o index.php estiver em /projeto/public/index.php, ele pega o que está antes do index.php que será o basePath
            $basePath = dirname($_SERVER['SCRIPT_NAME']);
            // 
            $path = str_replace($basePath, '',parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)) ;

            error_log("Método recebido: $method");
            error_log("Caminho recebido: $path");

            //VERIFICAR AS ROTAS
            foreach($this->routes as $r){
                if($r['method']==$method && $r['path']==$path){
                    // é metodo ou função dinâmica que permite invocar funções ou métodos de uma classe

                    //action é atributo que menciona "Qual a classe"
                    call_user_func($r['action']);
                    return;
                }
            }
            http_response_code(404);
            echo json_encode(['error'=>'Rota não encontrada'.$path.$method]);
        }
    }
?>