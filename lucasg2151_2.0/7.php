<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="a">A</label>
        <input type="number" name="numA" id="num">
        <label for="b">B</label>
        <input type="number" name="numB" id="num">
        <input type="submit" value="Ver">
    </form>
    <?php
    $numA = isset[$_POST['numA']];
    $numB = "numB";

  if($numA > $numB){
    echo "A maior que B";
  }else{
    echo "A menor que B";
  }
?>
</body>
</html>