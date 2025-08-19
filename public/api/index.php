<?php
    require_once __DIR__ . '/../../vendor/autoload.php';

    use routes\Routes;
    use src\Controllers\ClienteController;
    use src\Controllers\EmpresaController;
    use src\Controllers\LoginController;
    use src\Controllers\PostController;
    use src\Controllers\DashboardController;
    use src\Controllers\DescricaoController;

    $router = new Routes();
    $router->add('POST','/index.php/api/empresa',[new EmpresaController(),'criar']);

    $router->add('POST','/index.php/api/login',[new LoginController(),'login']);

    // rota para cadastrar cliente
    $router->add('POST','/index.php/api/cliente',[new ClienteController(),'cadastrarCliente']);

    $router->add('POST','/index.php/api/post',[new PostController(),'criarPost']);

    $router->add('GET','/index.php/api/dados',[new DashboardController(),'dadosSessao']);

    $router->add('GET','/index.php/api/mostrarPosts',[new PostController(),'mostrarPosts']);

    $router->add('POST', '/index.php/api/descricao',[new DescricaoController(),'salvar']);

    $router->handleRequest();
?>