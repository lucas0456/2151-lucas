let msg = document.getElementById("msg")
function fechar() {
    document.getElementById('popup').style.display =  "none";
}
function verifica() {
    let login = document.form.login.value;
    let senha = document.form.senha.value;

    if(login == "admin" && senha == "admin") {
        fechar();
    }
    else{
        document.getElementById('msg').style.display="block";
    }
}