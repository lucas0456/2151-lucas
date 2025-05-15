<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação ou aprovação?</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Calcular média final</h1>
        <hr><br>
        <form action="#" method="post">
            <label for="not1">Primeira nota: </label>
            <input type="number" name="not1" id="not1" max="10" step="0.5">
            <br><br>
            <label for="not2">Segunda nota: </label>
            <input type="number" name="not2" id="not2" max="10" step="0.5">
            <br><br>
            <label for="not3">Terceira nota: </label>
            <input type="number" name="not3" id="not3" max="10" step="0.5">
            <br><br>
            <input type="submit" value="Ver resultado" class="botao">
            <br><br>
        </form>
        <?php

            if(isset($_POST['not1'])) {
                //entrada
                $not1 = $_POST['not1'];
                $not2 = $_POST['not2'];
                $not3 = $_POST['not3'];
                $nots = array($not1, $not2, $not3);

                //processamento
                $m = ($not1 + $not2 + $not3) / 3;
                if ($m >= 6) {
                    $res = 'Aprovado';
                }
                else {
                    $res = 'Reprovado';
                }

                //saída
                echo "1ª Nota: $nots[0] | 2ª Nota: $nots[1] | 3ª Nota: $nots[2] | Média Final: " . number_format($m,1,',','.') . " | Condição: $res";

            }
            else {
                echo "Preencha o quadrado";
            }

        ?>
    </main>
</body>
</html>