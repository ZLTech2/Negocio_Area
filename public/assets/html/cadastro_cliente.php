<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/styles-cadastro.css">
    <link rel="shortcut icon" href="../images/logo rd (1).png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <nav>
          <div class="nav-list">
                <div class="logo">
                    <a href="../../index.html"><img src="../images/logo rd (1).png" alt=""></a>
                </div>

                <div class="hamburguer" id="hamburguer">
                  <span class="bar"></span>
                  <span class="bar"></span>
                  <span class="bar"></span>
                </div>
                <ul class="menu" id="menu">
                  <!-- <li><a href="../html/personalize.php">Personalize</a></li> -->
                  <!-- <li><a href="#myCarousel">Sobre</a></li> -->
                  <li><a href="http://zltech.freesite.online/?i=1"target="_blank">ZL Tech</a></li>
                  <li> <a href="./tipo_cadastro.php">Cadastrar</a></li>
                  <li><a href="./login.php">Entrar</a></li>
              </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-form">
            <h1>Negócio na Área</h1>
            <h2 style="color:white">cadastrar cliente</h2>
            <form id="formCliente">
                
                <label for="nomeCliente">Nome</label>
                    <input type="text" name="nome" id="nomeCliente" placeholder="Digite o seu nome" required>
               
                <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite o seu email" required>
            
                <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="Digite o seu número de telefone"  maxlength="15" required>

                <label for="senha">senha</label>
                    <input type="password" name="senha" id="senha" minlength="8" placeholder="Informe sua senha" required>

                <label for="confirmar_senha">Confirmação de senha:</label>
                <input type="password" name="confirmar_senha" id="confirmar_senha" minlength="8" placeholder="Confirme sua senha" required>
                
                <button type="submit">Cadastre-se</button>
                <a href="./login.php">Entrar</a>                
                <a href="./tipo_cadastro.php">Voltar</a>                

                <div class="msg" id="msg"></div>
        </div>

        <!-- <footer>
            <p>redes sociais</p>
        </footer> -->
    </main>
    <!-- <script src="../js/cadastro_empresa.js" defer></script> -->
    <script src="../js/cadastro_cliente.js" defer></script>
    <script src="../js/menu.js"></script>
    
</body>
</html>