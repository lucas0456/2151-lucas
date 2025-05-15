<?php
$mat = (int) $_GET['matricula'];
 
$sql = "delete from aluno where matricula = '$mat';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \dashboard_3/index.php?page=lista_alu');
    mysqli_close($con);
}else{
    header('Location: \dashboard_3/index.php?page=lista_alu');
    mysqli_close($con);
}
?>