function trocar(caminho, db, lg){
    document.getElementById('imagem_principal').src= caminho; 
    document.getElementById('titulo').value= db;
    document.getElementById('legenda').value= lg;
}