<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Calculadora Simples</h1>
        <hr><br>
        <form action="#" method="post">
            <label for="ope">Escolha a operação: </label>
            <select name="ope" id="ope">
                <option value="soma">Soma</option>
                <option value="sub">Subtração</option>
                <option value="mult">Multiplicação</option>
                <option value="div">Divisão</option>
            </select>
            <br><br>
            <label for="num1">Digite um número: </label>
            <input type="number" name="num1" id="num1">
            <br><br>
            <label for="num2">Digite outro número: </label>
            <input type="number" name="num2" id="num2">
            <br><br>
            <input type="submit" value="Calcular" class="botao">
            <br><br>
        </form>
        <?php

            if(isset($_POST['num1'])) {
                //entrada
                $ope = $_POST['ope'];
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];

                //processamento
                if ($ope == "soma") {
                    $resul = $num1 + $num2;
                    $s = "+";
                }
                else if ($ope == "sub") {
                    $resul = $num1 - $num2;
                    $s = "-";
                }
                else if ($ope == "mult") {
                    $resul = $num1 * $num2;
                    $s = "x";
                }
                else {
                    $resul = $num1 / $num2;
                    $s = "/";
                }

                //saída
                echo "$num1 $s $num2 = $resul";
            }
            else {
                echo "Preencha o que falta";
            }

        ?>
    </main>
</body>
</html>