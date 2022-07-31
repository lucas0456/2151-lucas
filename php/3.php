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
           <label>valor</label><input type="number" name="valor" id="valor">
            <input type="submit" value="ver">
        </form>
        <?php 
    $i;
    if(isset($_POST['valor'])){
        $valor = $_POST['valor'];
    if($valor>0) {
        for($i=0; $i<=$valor; $i++){
        echo "$i,";
        }
        }else{
        for($i=0; $i>=$valor; $i--){
        echo "$i,";
        }
    
        }
    }
?>
        </form>
    </main>
</body>
</html>
