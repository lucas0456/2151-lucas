<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Círculo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Círculos</h1>
        <hr><br>
        <form action="#" method="post">
            <label for="r">Digite o raio de um círculo: </label>
            <input type="number" name="r" id="r" step="0.1">
            <br><br>
            <input type="submit" value="ver" class="botao">
            <br><br>
        </form>
        <?php

            if(isset($_POST['r'])) {

                //entrada
                $r = $_POST['r'];
                $p = 3.14;

                //processamento
                $peri = 2 * $p * $r;
                $ar = $p * ($r * $r);

                //saída
                echo "Perímetro: "; 
                echo $peri;
                echo "<br>";
                echo "Área: ";
                echo $ar;
                echo "<br>";

            }
            else {
                echo "Preencha o campo acima";
            }

        ?>
    </main>
</body>
</html>