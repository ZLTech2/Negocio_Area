// máscara do telefone
function mascaraTelefone(telefone){
    telefone = telefone.replace(/\D/g,'');
    telefone = telefone.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    return telefone;
}

const telefone = document.getElementById('telefone');
telefone.addEventListener('input',function(){
    this.value = mascaraTelefone(this.value);
})


const url = "http://localhost/negocio_area/public/api/index.php/api/cliente"
const msg = document.getElementById('msg')
const formCliente = document.getElementById('formCliente')
const formData = new FormData(formCliente)

formCliente.addEventListener('submit',function(e){
    e.preventDefault();
        fetch(url,{
        method: 'POST',
        body: formData
    })
    .then(response=>response.json())
    .then(data=>{
        console.log(data)
        if(data.status === 'success'){
            formCliente.reset()
        }
        msg.innerText = data.msg
        msg.status = "success"
    })
    .catch(error=>{
        console.log(error)
        msg.innerText = "Erro ao cadastrar a conta"
        msg.status === "error"
    })
})

