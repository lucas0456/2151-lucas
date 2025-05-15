<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    echo "<h1> minha primeira linha PHP </h1>";
    print "<hr>";
    // echo e print faz a mesma açã
    //porém o echo é o mais usado para imprimir
    // uma mensagem na tela

    /*
    comentários de várias linhas
    */

    // entrada de dados
    $a = 10;
    $b = 5;

    //processamento
    $soma = $a + $b;
    $div = $a - $b;
    $mult = $a * $b;
    $diva = $a / $b;
    $mod = $a % $b;

    //saída
    echo "A soma é $soma <br>";
    echo "A subtração é $div <br>";
    echo "A multiplicação é $mult <br>";
    echo "A divisão é $diva <br>";
    echo "A mod é $mod <hr>";
    echo "$a + $b = $soma <br>";
    echo "$a - $b = $div <br>";
    echo "$a * $b = $mult <br>";
    echo "$a / $b = $diva <br>";
    echo "$a % $b = $mod <br>";

    ?>
</body>
</html>