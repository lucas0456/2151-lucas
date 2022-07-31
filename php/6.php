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
           <label>pequena frase</label>
           <input type="text" name="tex" id="t">
           <label>um caracter</label>
           <input type="text" name="car" id="t">
            <input type="submit" value="ver">
        </form>
        <?php 

if(isset($_POST['tex'])){
    $tex = $_POST['tex'];
    $car = $_POST['car'];
    $car = strlen;
    if($car = 'num'){
        echo "$num";
    }
}
?>
        </form>
    </main>
</body>
</html>