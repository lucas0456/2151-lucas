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
           <label>valor 1</label><input type="number" name="valor1" id="min">
           <label>valor 2</label><input type="number" name="valor2" id="max">
            <input type="submit" value="ver">
        </form>
        <?php 

if(isset($_POST['valor1'])){
$min = $_POST['valor1'];
$max = $_POST['valor2'];

for($i = $min+1; $i < $max; $i++){

  echo "$i, ";
}
}
?>
        </form>
    </main>
</body>
</html>
