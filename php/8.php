<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form" action="#" method="post">
        <labe>Numero</label>
        <input type="number" name="num" id="n">
        <input type="submit" value="ver">
    </form>
    <?php 
    $i;
    if(isset($_POST['num'])){
        $n = $_POST['num'];
        if($n > 1) {
            for($i; $i = $n; $i++){
            echo "$n! = $i";
            }
            }else{
            for($i; $i = $n; $i--){
            echo "$n! = $i";
            }
        
            }
    }
    ?>
</body>
</html>