<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="num1">numero 1</label>
        <input type="number" name="num1" id="num">
        <label for="num2">numero 2</label>
        <input type="number" name="num2" id="num">
    </form>
    <?php
    $num1 = isset[$_POST['num1']];
    $num2 = isset[$_POST['num2']];
  
    if($num1 > $num2){
      echo $num1 . " " . $num2;
    }else{
      echo $num2 . " " . $num1;
    }
    ?>
</body>
</html>