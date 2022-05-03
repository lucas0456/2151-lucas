function cacula(){
    let entrega = document.form.entrega.value;



    if(entrega == "rap"){
        valor = 140;
    } else if(entrega == "media"){
        valor = 50;
    } else if(entrega == "eco"){
        valor = 20;
    }

    document.getElementById('tot').value = valor;

    document.getElementById('copo').checked = false;
    document.getElementById('blusa').checked = false;
    document.getElementById('ace').checked = false;
} 

function ops(valor,marcado) {
    tot = document.getElementById('tot').value;

if(marcado){
    tot = Number(tot) + Number(valor);
}
else {
    tot = Number(tot) - Number(valor);
}
document.getElementById('tot').value = tot;
}


function confirma(form) {
    tot = form.tot.value;
    if (email.value == "") {
        alert(`O email é obrigatório`);
        form.email.focus();
        return false;
    } 
    else if (tele.value == "") {
        alert(`O telefone é obrigatório`);
        form.tele.focus();
        return false;
    }
    else if (end.value == "") {
        alert(`O endereço é obrigatório`);
        form.end.focus();
        return false;
    }
    else if (city.value == "") {
        alert(`O campo cidade é obrigatório`);
        form.city.focus();
        return false;
    }
    else if (bri.value == "") {
        alert(`Este campo é obrigatório`);
        form.bri.focus();
        return false;
    }
    else if (s.value == "") {
        alert(`Este campo é obrigatório`);
        form.s.focus();
        return false;
    }
}
