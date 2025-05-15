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
        <label for="ida">Idade</label>
        <input type="number" name="idade" id="a">
        <input type="submit" value="ver">
    </form>
    <?php
  $idade = isset[$_POST['idade']];

  if($idade >= 18){
    echo "é maior de 18 e tem {$idade} Anos";
  }else{
    echo "não é maior de 18 e tem {$idade} Anos";
  }
?>
</body>
</html>