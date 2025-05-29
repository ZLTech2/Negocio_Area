const form = document.getElementById('form');
const msg = document.getElementById('msg');

const senha = document.getElementById('senha');
const confirmarSenha = document.getElementById('confirmar_senha');
function verificarSenhas() {
    // Validação de senha
    const senhaValue = senha.value.trim();
    const confirmarSenhaValue = confirmarSenha.value.trim();

    msg.style.display = 'none';
    msg.className = 'msg';
    if (senhaValue === "" || confirmarSenhaValue === "") {
        return;
    }

    if (senhaValue !== confirmarSenhaValue) {
        msg.innerText = 'As senhas não são iguais';
        msg.classList.add('erro');
        msg.style.display = 'block';
        return false; // Sai da função se as senhas forem diferentes
    } else {
        msg.innerText = 'As senhas são iguais.';
        msg.classList.add('sucesso');
        msg.style.display = 'block'; // Exibe a mensagem de sucesso
        return true;
    }  
}

senha.addEventListener('input',verificarSenhas);
confirmarSenha.addEventListener('input',verificarSenhas);

form.addEventListener('submit', function(e){
    if(!verificarSenhas()){
        e.preventDefault();
        return;
    }

    e.preventDefault();
    const formData = new FormData(form);
    const data = {};
    
    // Converte o FormData para um objeto simples
    formData.forEach((value, key) => {
        data[key] = value;
    });

    fetch('http://localhost/negocio_mvc/public/api/index.php/api/empresa', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data) // Converte para JSON antes de enviar
    })
    .then(response => response.json())
    .then(data => {
        msg.innerText = data.msg;
        msg.className = data.status === 'success' ? 'success' : 'error';

        if (data.status === 'success') {
            form.reset();
        }
    })
    .catch(error => {
        console.error('Erro:', error);
        msg.innerText = "Ocorreu um erro ao enviar o formulário";
    });
});

function mascaraCNPJ(cnpj) {
    cnpj = cnpj.replace(/\D/g, '');
    cnpj = cnpj.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/, '$1.$2.$3/$4-$5');
    return cnpj;
}

const cnpj = document.getElementById('cnpj');
cnpj.addEventListener('input', function () {
    this.value = mascaraCNPJ(this.value);
});

function mascaraTelefone(telefone){
    telefone = telefone.replace(/\D/g,'');
    telefone = telefone.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    return telefone;
}

const telefone = document.getElementById('telefone');
telefone.addEventListener('input',function(){
    this.value = mascaraTelefone(this.value);
})

