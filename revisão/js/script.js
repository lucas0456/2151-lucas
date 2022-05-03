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
    function trocatema(){
        //entrada
        tema = document.getElementById('tema').value;

        //processamento
        if(tema == "mario"){
            titulo = "Super Mario Bros";
            newFundo = "img/mario.jpg";
            newFoto = "img/mario.png";
            cor = "red";
            altura = "85%";
            right = "0%";
            bottom = "-5";
        } else if(tema == "sofia"){
            titulo = "Princesa Sofia";
            newFundo = "img/sofia.jpg";
            newFoto = "img/sofia.png";
            cor = "purple";
            altura = "90%";
            right = "5%";
            bottom = "-5%";
        } else if(tema == "masks"){
            titulo = "Pj masks";
            newFundo = "img/pjmasks.jpg";
            newFoto = "img/pjmasks.png";
            cor = "blue";
            altura = "85%";
            right = "-2%";
            bottom = "0%";
        } else{
            titulo = "Tema das festas";
            newFundo = "";
            newFoto = "";
            cor = "black";
            altura = "100";
            right = "0%";
            bottom = "0";
        }

        //saida
        document.getElementById('titulo').value = titulo
        document.body.style.backgroundImage = "url(" + newFundo + ")";
        document.getElementById('foto').src = newFoto;
        document.getElementById('titulo').style.color = cor;
        document.body.style.color = cor;

        document
    }
    function alerta(){
        //entrada
        total = document.getElementById('total').value;
    
        //processamento
        if (total < 1500){
            msg = "Selecione o Horário da Festa."
        }
        else{
            msg = "Obrigada pela Preferêcia. ";
        
            if (total >= 2500) {
                total = total * 0.9;
                msg += "Você recebeu um desconto de 10%. ";
            }
      
            msg += "Valor a Pagar R$ " + total;
      
        }
        
       //saída
       //alert(msg);
        
        document.getElementById('mensagem').value = msg;
        $('#alerta').modal('show');
    }