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
