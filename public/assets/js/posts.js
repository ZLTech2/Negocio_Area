const formPost = document.getElementById('formPost');
const url = "http://localhost/negocio_area/public/api/index.php/api/post";
const msg = document.getElementById('msg')
const descricaoProduto = document.getElementById('descProduto');
const precoProduto = document.getElementById('precProduto');
const imagemProduto = document.getElementById('imagemProduto')

formPost.addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(formPost);

    fetch(url, {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            console.log(data)

            if (data.status === 'success') {
                msg.innerText = "Post cadastrado com sucesso"
                msg.className = 'success'
                

                if (data.imagem) {
                    imagemProduto.src = "http://localhost/negocio_area/" + data.imagem;
                    imagemProduto.style.display = 'block';
                }

                formPost.reset()
            }

        })
        .catch(error => {
            console.error('Erro', error)
            msg.innerText = "Erro ao cadastrar post"
            msg.status === 'error'
        })
})

const titulo = document.getElementById('title-loja')
const descricao = document.getElementById('desc-loja');
fetch('http://localhost/negocio_area/public/api/index.php/api/dados')
    .then(response => response.json())
    .then(data => {
        titulo.textContent = data.nomeEmpresa;
        descricao.textContent = data.descricao;
    })
    .catch(error => {
        console.error('Erro ao buscar dados:', error);
    });

const salvarDescritivo = document.getElementById('salvarDescritivo');


fetch('http://localhost/negocio_area/public/api/index.php/api/mostrarPosts')
    .then(response => response.json())
    .then(posts => {
        if (Array.isArray(posts) && posts.length > 0) {
            const ultimo = posts[0];
            descricaoProduto.textContent = ultimo.descricaoProduto;
            precoProduto.textContent = ultimo.preco;

            if (ultimo.imagem) {
                imagemProduto.src = "http://localhost/negocio_area/" + ultimo.imagem;
                imagemProduto.style.display = 'block';
            }
        }
    })
    .catch(error=>{
        console.error("erro ao carregar posts", error);
    })
