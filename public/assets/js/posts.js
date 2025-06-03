const formPost = document.getElementById('formPost');
const url = "http://localhost/negocio_area/public/api/index.php/api/post";
const msg = document.getElementById('msg')
formPost.addEventListener('submit',function(e){
    e.preventDefault();
    const formData = new FormData(formPost);

    fetch(url, {
        method: 'POST',
        body: formData
    })
    .then(response=>response.json())
    .then(data =>{
        console.log(data)
        msg.innerText = "Post cadastrado com sucesso"
        msg.status === 'success'
        formPost.reset()
    })
    .catch(error=>{
        console.error('Erro',error)
        msg.innerText = "Erro ao cadastrar post"
        msg.status === 'error'
    })
})
