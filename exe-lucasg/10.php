<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mêses</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Mêses até 12</h1>
        <hr><br>
        <form action="#" method="post">
            <label for="n">Digite um número: </label>
            <input type="number" name="n" id="n">
            <br><br>
            <input type="submit" value="Calcular" class="botao">
            <br><br>
        </form>
        <?php

            if(isset($_POST['n'])) {
                //entrada
                $n = $_POST['n'];
                $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

                //processamento
                if ($n >= 1 && $n <= 12) {
                    //saída 
                    echo $meses[$n - 1];
                }
                else {
                    //saída
                    echo "Esse mês não existe";
                }
            }
            else {
                echo "Preencha, Pfv";
            }

        ?>
    </main>
</body>
</html>