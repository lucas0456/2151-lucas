<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trabalho</title>
</head>
<body>
    <main>
        <form name="form" action="#" method="post">
           <label>altura</label><input type="number" name="altura" id="a">
           <label>sexo</label>
           <select name="sexo" id="sexo">
            <option value="m">M</option>
            <option value="f">F</option>
           </select>
            <input type="submit" value="ver">
        </form>
        <?php
            if(isset($_POST['altura'])){
                $altura = $_POST['altura'];
                $altura = strtr($altura,',','.');
                $sexo = $_POST['sexo'];
                if($sexo == 'm'){
                    $ideal = (72.7 * $altura)-58;
                } else if($sexo == 'f'){
                    $ideal = (62.1 * 'altura')-44.7;
                }
                echo "<p>
                Sexo: $sexo
                Altura: $altura
                Ideal: $ideal
                </p>";

            }
        ?>
    </main>
</body>
</html>