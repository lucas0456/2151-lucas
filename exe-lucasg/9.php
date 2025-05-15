<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identidade</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <form action="#" method="post">
            <h1>1</h1>
            <hr><br>
            <label for="nom">Digite o Nome: </label>
            <input type="text" name="nom" id="nom">
            <br><br>
            <label for="ida">Digite sua Idade: </label>
            <input type="number" name="ida" id="ida" min="0" max="120">
            <br><br>
            <input type="submit" value="Ver" class="botao">
            <br><br>
        </form>
        <?php

            if(isset($_POST['nom'])) {
                //entrada
                $nom = $_POST['nom'];
                $ida = $_POST['ida'];

                //processamento
                if ($ida >= 18) {
                    $res = "é";
                }
                else {
                    $res = "não é";
                }

                //saída
                echo "$nom $res maior de 18 e tem $ida anos";
            }
            else {
                echo "Preencha o que falta";
            }

        ?>
    </main>
</body>
</html>