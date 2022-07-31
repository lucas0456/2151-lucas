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
           <label>sala</label><input type="number" name="sala" id="sala">
            <input type="submit" value="ver">
        </form>
        <?php
                if(isset($_POST['sala'])){
                    $sala = $_POST['sala'];
                    if($sala <= '300'){
                        $sala += ($sala) * 0.5;
                    } else {
                        $sala += ($sala) * 0.3;
                    }
                }
                echo "<p>
                salário: $sala
                </p>";
        ?>
        </form>
    </main>
</body>
</html>
