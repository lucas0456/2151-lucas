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
}