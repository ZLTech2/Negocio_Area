<?php
    session_start();
    if (isset($_SESSION["logado"]) && $_SESSION["logado"] ===true) {
        header("Location: dashboard.php");
        exit;
    }

    $msgErro = "";
    if (isset($_SESSION["erro"])){
        $msgErro = $_SESSION["erro"];
        unset($_SESSION["erro"]);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles-login.css">
    <link rel="shortcut icon" href="../images/logo rd (1).png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php
    include ('header.html');
    ?>
    <main>
        <div class="container-form">
            <h1>Negócio na Área</h1>
            <!-- Exibir mensagem de erro -->
            <form id="loginForm">
                <p id="login_msg" style="color: rgb(255,246,0); text-transform:uppercase"></p>

                <label for="email">Email:</label>
                <input type="text" id="login_email" name="email" placeholder="Digite seu email" required>

                <label for="senha">Senha:</label>
                <input type="password" id="login_senha" name="senha" placeholder="Digite sua senha" required>

                <button type="submit">Entrar</button>

                <p><a href="#">Esqueci a senha</a></p>
                <p>Não possui conta? <a href="../html/tipo_cadastro.html">Cadastre-se</a></p>

                <div class="redes-sociais">
                    <span><a href="#"><i class="fa-brands fa-google"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-facebook"></i></a></span>
                </div>
                <div id="msg"></div>
            </form>

        </div>
        </main>
        <script src="../js/login.js" defer></script>
        <script src="../js/menu.js"></script>
</body>
</html>