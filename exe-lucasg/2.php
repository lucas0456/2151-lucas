<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farenheit e Celsius</title>
    <<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Converter farenheit em celsius</h1>
        <hr><br>
        <form action="#" method="post">
            <label for="f">Digite uma temperatura em Farenheit: </label>
            <input type="number" name="f" id="f" step="0.1">
            °F
            <br><br>
            <input type="submit" value="Converter" class="botao">
            <br><br>
        </form>
        <?php

            if(isset($_POST['f'])) {
                //entrada
                $f = $_POST['f'];

                //processamento
                $c = 5 * ($f - 32) / 9;

                //saída
                echo "Essa temperatura é ";
                echo $c;
                echo "°C";
            }
            else {
                echo "Preencha o campo";
            }

        ?>
    </main>
</body>
</html>