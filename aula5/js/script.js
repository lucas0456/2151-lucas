function calcularPedido(){


    //entrada
    Sand = document.getElementById('Sand').value;
    Refri = document.getElementById('Refri').value;
    Batata = document.getElementById('Batata').value;
    quantSand = document.getElementById('quantSand').value;
    quantRefri = document.getElementById('quantRefri').value;
    quantBatata = document.getElementById('quantBatata').value;

    //procesamento
    if(Sand == "big"){
        precosand = "14.90";
    } else if(Sand == "qua"){
        precosand = "13.90";
    } else{
        precosand = "12.90";
    }


    total = (quantSand * precosand);

    
    //saida
    document.getElementById('total').value = total.toFixed(2);

}

