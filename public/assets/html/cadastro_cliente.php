<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/styles-cadastro.css">
    <link rel="shortcut icon" href="../images/logo rd (1).png" type="image/x-icon">
</head>
<body>
    <main>
        <div class="container-form">
            <h1>Negócio na Área</h1>
            <form method="post" id="form">
                
                <label for="nome_empresa">Nome</label>
                    <input type="text" name="nome_empresa" id="nome" placeholder="Digite o seu nome" required>
               
                <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite o seu email" required>
            
                <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="Digite o seu número de telefone"  maxlength="15" required>

                <label for="senha">senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Informe sua senha" required>

                <label for="confirmar_senha">Confirmação de senha:</label>
                <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirme sua senha" required>
                
                <button type="submit">Cadastre-se</button>
                <a href="./login.php">Entrar</a>                
                <a href="./tipo_cadastro.php">Voltar</a>                

                <div class="msg" id="msg"></div>
        </div>

        <!-- <footer>
            <p>redes sociais</p>
        </footer> -->
    </main>
    <script src="../js/script.js" defer></script>
    <script src="../js/cliente.js"></script>
    <script src="../js/menu.js"></script>
    
</body>
</html>