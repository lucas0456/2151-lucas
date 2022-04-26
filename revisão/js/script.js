function cal() {
    //entrada
    let horario = document.form.horario.value;
   
    //processamento
    if(horario == "Manha"){
        valor = 1500;
    } else if(horario == "Tarde"){
        valor = 1800;
    } else if(horario == "noite"){
        valor = 2300;
    }

    //saida
    document.getElementById('total').value = valor;

    document.getElementById('fest1').checked = false;
    document.getElementById('fest2').checked = false;
    document.getElementById('fest3').checked = false;
    document.getElementById('fest4').checked = false;
    document.getElementById('fest5').checked = false;

}

     function op(valor,marcado) {
            //entrada
            total = document.getElementById('total').value;

            //processamento
        if(marcado){
            total = Number(total) + Number(valor);
            //total += valor; forma reduzida
        }
        else {
            total = Number(total) - Number(valor);
            //total -= valor; forma reduzida
        }
        //saida
        document.getElementById('total').value = total;
    }