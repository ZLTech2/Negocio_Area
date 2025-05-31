<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/styles_tipo.css">
    <link rel="shortcut icon" href="../images/logo rd (1).png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include('header.html');
    ?>

    <main>
        <div class="container-form">
            <h1>Negócio na Área</h1>
            <form method="post" id="form">
                <h2>Escolha o tipo de cadastro</h2>
                <a href="./cadastro_cliente.php">Sou um cliente</a>
                <p>Confira os posts e interaja</p>
                <a href="./cadastro_empresa.html">Sou uma empresa</a>
                <p>Crie os posts para sua empresa</p>
                <div class="msg" id="msg"></div>
        </div>
    </form>
        <!-- <footer>
            <p>redes sociais</p>
        </footer> -->
    </main>
    <script src="../js/script.js" defer></script>
    <script src="../js/menu.js"></script>
    
</body>
</html>