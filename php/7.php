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
           <label>numero 1</label>
           <input type="number" name="num1" id="nu">
           <label>numero 2</label>
           <input type="text" name="num2" id="num">
            <input type="submit" value="ver">
        </form>
<?php
if(isset($_POST['num1'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    for($i = $num2; $i = $num1; $i += $num1){
        echo "$i+";
    }
}

?>
        </form>
    </main>
</body>
</html>
