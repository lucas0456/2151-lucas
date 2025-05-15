<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>É maior ou menor? Eis a questão</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>maior / menor?</h1>
        <hr><br>
        <form action="#" method="post">
            <label for="v1">Digite um Valor: </label>
            <input type="number" name="v1" id="v1">
            <br><br>
            <label for="v2">Digite outro Valor: </label>
            <input type="number" name="v2" id="v2">
            <br><br>
            <input type="submit" value="Resultado" class="botao">
            <br><br>
        </form>
        <?php

            if(isset($_POST['v1'])) {
                //entrada
                $v1 = $_POST['v1'];
                $v2 = $_POST['v2'];

                //processamento
                if ($v1 > $v2) {
                    //saida
                    echo "$v1 é maior que $v2";
                }
                else if ($v1 < $v2) {
                    //saida
                    echo "$v1 é menor que $v2";
                }
                else {
                    //saida 
                    echo "$v1 é igual a $v2";
                }
            }
            else {
                echo "Pfv, preencha o que falta";
            }

        ?>
    </main>
</body>
</html>