<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem crescente</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Números crescente</h1>
        <hr><br>
        <form action="#" method="post">
            <label for="va1">Digite um Valor: </label>
            <input type="number" name="va1" id="va1">
            <br><br>
            <label for="va2">Digite outro Valor: </label>
            <input type="number" name="va2" id="va2">
            <br><br>
            <input type="submit" value="Cal" class="botao">
            <br><br>
        </form>
        <?php

            if(isset($_POST['va1'])) {
                //entrada
                $va1 = $_POST['va1'];
                $va2 = $_POST['va2'];

                //processamento
                if ($va1 > $va2) {
                    //saida
                    echo "$va2 $va1";
                }
                else {
                    //saida
                    echo "$va1 $va2";
                }
            }
            else {
                echo "Preencha o quadrado";
            }

        ?>
    </main>
</body>
</html>