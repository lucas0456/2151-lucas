<?php
$nome_a           = $_POST["nome_aluno"];
$dt_nasc          = $_POST["dt_nasc"];
$sexo             = $_POST["sexo_aluno"];
$nome_p           = $_POST["nome_pai"];
$nome_m           = $_POST["nome_mae"];
$rg           	  = $_POST["rg_aluno"];
$cpf              = $_POST["cpf_aluno"];

$fdt_nasc 	= implode("-", array_reverse(explode("/", $dt_nasc)));


$sql = "insert into aluno values ";
$sql .= "(0, '$nome_a', '$nome_p', '$nome_m', '$dt_nasc', '$sexo', '$rg', '$cpf')";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
    header('Location: \dashboard_3/index.php?page=lista_alu&msg=1');
    mysqli_close($con);
}else{
    header('Location: \dashboard_3/index.php?page=lista_alu&msg=4');
    mysqli_close($con);
}
?>