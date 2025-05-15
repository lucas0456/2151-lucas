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
        <label for="num">Numero de meses</label>
        <input type="number" name="nummes" id="meses">
        <input type="submit" value="ver">
    </form>
    <?php
    $nummes = isset[$_POST['nummes']];

  $mes = [
  "Janeiro", "Fevereiro",
  "Março", "Abril",
  "Maio", "Junho",
  "Julho", "Agosto",
  "Setembro", "Outubro",
  "Novembro", "Dezembro"];


  if($nummes >=1 && $nummes <=12){
    echo $mes[$nummes - 1];
  }else{
    echo "Mês inválido";
  }
 ?>
</body>
</html>