<?php
    require_once __DIR__ . '/../../vendor/autoload.php';

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type");
    header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS");
    use routes\Routes;
    use src\Controllers\ClienteController;
    use src\Controllers\EmpresaController;
    use src\Controllers\LoginController;
    use src\Controllers\PostController;
    use src\Controllers\DashboardController;
    use src\Controllers\DescricaoController;

    $router = new Routes();
    $router->add('POST','/empresa',[new EmpresaController(),'criar']);

    $router->add('POST','/login',[new LoginController(),'login']);

    // rota para cadastrar cliente
    $router->add('POST','/cliente',[new ClienteController(),'cadastrarCliente']);

    $router->add('POST','/post',[new PostController(),'criarPost']);

    $router->add('GET','/dados',[new DashboardController(),'dadosSessao']);

    $router->add('GET','/mostrarPosts',[new PostController(),'mostrarPosts']);

    $router->add('POST', '/descricao',[new DescricaoController(),'salvar']);

    $router->handleRequest();
?>