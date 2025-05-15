<!DOCTYPE html>
<html lang="ept-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="not">Nota</label>
        <input type="number" name="nota" id="to">
    </form>
    <?php
  $nota = isset[$_POST['nota']];
  $total = ;

  for($i = 0; $i < count($nota); $i++){
    $total += $nota[$i];
  }

  $res = $total / count($nota);

  if($res >= 6){
    echo "Aprovado";
  }else{
    echo "Reprovado";
  }

?>
</body>
</html>