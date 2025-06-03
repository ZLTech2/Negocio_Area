function mascaraTelefone(telefone){
    telefone = telefone.replace(/\D/g,'');
    telefone = telefone.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    return telefone;
}

const telefone = document.getElementById('telefone');
telefone.addEventListener('input',function(){
    this.value = mascaraTelefone(this.value);
})