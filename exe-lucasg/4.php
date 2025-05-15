<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Cálculos entre Valores</h1>
        <hr><br>
        <form action="#" method="post">
            <label for="num1">Digite um número inteiro: </label>
            <input type="number" name="num1" id="num1">
            <br><br>
            <label for="num2">Digite outro número inteiro: </label>
            <input type="number" name="num2" id="num2">
            <br><br>
            <label for="num3">Digite um número real: </label>
            <input type="number" name="num3" id="num3" step="0.1">
            <br><br>
            <input type="submit" value="Resultado" class="botao">
            <br><br>
        </form>
        <?php

            if(isset($_POST['num1'])) {
                //entrada
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];

                //processamento
                $a = (2 * $num1) * ($num2/2);
                $b = (3 * $num1) + $num3;
                $c = $num3 * $num3 * $num3;

                //saída
                echo "(2 x $num1) x ($num2 / 2) = $a <br>";
                echo "(3 x $num1) + $num3 = $b <br>";
                echo $num3 . "<sup>3</sup> = $c";
                

            }
            else {
                echo "Preencha os campos";
            }

        ?>
    </main>
</body>
</html>