document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Impede o envio tradicional

    const loginEmail = document.getElementById('login_email').value;
    const loginSenha = document.getElementById('login_senha').value;
    const msg = document.getElementById('login_msg');
   
    fetch('http://localhost/negocio_area/public/api/index.php/api/login', {
        method: 'POST',
        headers:{
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            email: loginEmail,
            senha: loginSenha
        }
        )
    })
    .then(response => response.json()) // Converte a resposta para JSON
    .then(data => {
        if (data.status === 'success') {
            
            localStorage.setItem('user', JSON.stringify(data.user));
            window.location.href = "/negocio_area/src/views/empresa/dashboard_empresa.php";
        }else{
            msg.innerText ='Email ou senha inválidos'
        }
    })
    .catch(error => {
        console.error('Erro ao tentar login:', error);
        msg.innerText = 'Erro ao tentar login. Verifique seus dados!';
        msg.style.color = 'red';
    });
});

window.onload = function () {
    google.accounts.id.initialize({
        client_id: "SEU_ID_CLIENTE_AQUI.apps.googleusercontent.com",
        callback: handleLoginResponse
    });

    google.accounts.id.renderButton(
        document.getElementById("google-btn-container"),
        { 
            theme: "filled_black", // Preto para não ser azul
            size: "medium",       // "medium" é menor que o "large" que você estava usando
            width: 250,           // Ajuste este número para diminuir a largura
            shape: "rectangular",
            locale: "pt-BR"
        }
    );
}


/*
function handleLoginResponse(response) {
    // 1. O Google autenticou o usuário e te deu um Token (JWT)
    const token = response.credential;

    // 2. Enviar para o seu backend para validar e iniciar a SESSION
    fetch('http://localhost/negocio_area/public/api/index.php/api/login_social', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ token: token })
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'success') {
            // Login feito! Redireciona para a dashboard
            window.location.href = 'dashboard.php';
        } else {
            // Caso o e-mail não esteja cadastrado ainda
            msg.innerText = "Conta não encontrada. Por favor, cadastre-se primeiro.";
            msg.className = "msg erro";
        }
    })
    .catch(err => console.error("Erro no login social:", err));
}
    */