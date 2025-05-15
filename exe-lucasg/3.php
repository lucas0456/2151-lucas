<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius e Farenheit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Convertendo celsius em farenheit</h1>
        <hr><br>
        <form action="#" method="post">
            <label for="c">Digite uma temperatura em Celsius: </label>
            <input type="number" name="c" id="c" step="0.1">
            °C
            <br><br>
            <input type="submit" value="ver" class="botao">
            <br><br>
        </form>
        <?php

            if(isset($_POST['c'])) {
                //entrada
                $c = $_POST['c'];

                //processamento
                $f = ($c * 9/5) + 32;

                //saída
                echo "Essa temperatura é ";
                echo $f;
                echo "°F";
            }
            else {
                echo "Preencha o campo";
            }

        ?>
    </main>
</body>
</html>