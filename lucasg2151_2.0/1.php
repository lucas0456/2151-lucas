<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="#" method="get">
  Numero 1: <input type="text" name="num"><br>
  <input type="submit">
 </form>
 
 <?php 
  
  $num = $_GET['num'];
  
  
  echo "Numero digitado: $num <br />";
   
  echo "Numero dobrado : ", 2*$num;
 ?>
</body>
</html>