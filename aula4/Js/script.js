function calculos(form) {
    form.login.value = form.login.toUpperCase();
    pagamento = form.pagamento.value;

    quant1 = form.quanr1.value;
    quant2 = form.quant2.value;
    quant3 = form.quant3.value;
    quant4 = form.quant4.value;

    tot1 = quant1 * 300;
    tot2 = quant2 * 700;
    tot3 = quant3 * 650;
    tot4 = quant4 * 299;

    if(pagamento == "Dinheiro") {
        perc = 0.15;
    } else {
        perc = 0;
    }
    total = tot1 + tot2 + tot3 + tot4;
    desconto = total * perc;
    apagar = total - desconto;

    form.tot1.value = "R$ " + tot1.toFixed(2).repalce(".", ",", ",");
    form.tot2.value = "R$ " + tot2.toFixed(2).repalce(".", ",", ",");
    form.tot3.value = "R$ " + tot3.toFixed(2).repalce(".",",", ",");
    form.tot4.value = "R$ " + tot4.toFixed(2).repalce(".",",",",");

    document.getElementById(`total`).value = total.toFixed(2).repalce(".",",", ",");
    document.getElementById(`desconto`).value = desconto.toFixed(2).repalce(".", ",", ",");
    document.getElementById(`apagar`).value = apagar.toFixed(2).repalce(".", ",", ",");
} function confirma(form) {
    total = form.total.value;
    if(form.login.value == "") {
        alert(`O campo Login é obrigatório`);
        form.login.focus();
        return false;
    } else if(form.senha1.value == "") {
        alert(`O campo Senha é obrigatório`);
        form.senha1.focus();
        return false;
    } else if (form.senha1.value != form.senha2.value) {
        alert(`O campo Senha esta diferente da confirmação de senha`);
        form.senha1.focus();
        return false;
    } else if((quant1 == 0) && (quant2 == 0) && (quant3 == 0) && (quant4 == 0)) {
        alert(`Você precisa solicitar pelo menos 1 produto`);
        form.quant1.focus();
        return false;
    } else {
        if(confirm("Confirma o envio dos Orçamento no valor de " + total)) {
            alert("Orçamento enviado com sucesso!");
            return true;
        } else {
            return false;
        }
    }
}
function senha(){
    senha1 = document.orcamento.senha1.value;
    senha2 = document.orcamento.senha2.value;
    if(sneha1 != senha2) {
        document.getElementById(`msg`).style.display = "block";
    } else {
        document.getElementById(`msg`).style.display = "none";
    }
}
function pessoa(obj){
    if(obj == "pf"){
        document.getElementById(`cpf`).style.display = "block";
        document.getElementById(`cnpj`).style.display = "none";
        document.orcamento.cpf.focus();
    } else {
        document.getElementById(`cpf`).style.display = "none";
        document.getElementById(`cnpj`).style.display = "block";
        document.orcamento.cnpj.focus();
    }
} function mascara_cpf(obj){
    if(obj.value.length == 3) {
        obj.value += ".";
    } if(obj.value.length == 7){
        obj.value += ".";
    } if(obj.value.length == 11){
        obj.value += "-";
    }
}
function masacara_cnpj(obj){
    if(obj.value.length == 2){
        obj.value += ".";
    } if(obj.value.length == 6){
        obj.value += ".";
    } if(obj.value.length == 10) {
        obj.value += "/";
    } if(obj.value.length == 15) {
        obj.value += "-";
    }
}
function mascara_tel(obj){
    if(obj.value.length == 0){
        obj.value += "(";
    } if(obj.value.length == 3){
        obj.value += ")";
    } if(obj.value.length == 8) {
        obj.value += "-";
    }
}
function salto(campo,digito) {
    if(campo == "cpf"){
        if(digito.length>13){
            document.orcamento.telefone.focus();
        }
    } if(campo == "cnpj"){
        if(digito.length>17){
            document.orcamento.telefone.focus();
        }
    }
    if(campo == "telefone"){
        if(digito.length>12){
            document.orcamento.pagamento.focus();
        }
    }
}
function abrir(){
    pagamento = document.orcamento.pagamento.value;
    if(pagamento == "Cartão"){
        document.getElementById(`cartao`).style.display = "block";
        document.orcamento.num.focus();
    } else {
        document.getElementById(`cartao`).style.display = "none";
    }
}
function somente_numero(e){
    tecla = (window.event)? event.keyCode:e.which;
    if((tecla>=48 && tecla<=57) || (tecla>=96 && tecla<=105) || (tecla == 8) || (tecla == 37) || (tecla == 39) || (tecla == 46)){
        return true;
    } else {
        return false;
    }
} 
function setas(e){
    tecla = (window.event)? event.keyCode:e.which;
    if((tecla == 38) || (tecla == 40) || (tecla == 9)) {
        return true;
    } else {
        return false;
    }
}