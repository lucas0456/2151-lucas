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
           <label>strings</label>
           <input type="text" name="str" id="sstr">
            <input type="submit" value="ver">
        </form>
        <?php 

if(isset($_POST['str'])){
    $str = $_POST['str'];
    if($str == "string"){
        echo "igual";
    } else{
        echo "diferente";
    }
}
?>
        </form>
    </main>
</body>
</html>