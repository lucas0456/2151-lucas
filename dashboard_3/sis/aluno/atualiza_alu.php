<?php
$mat              =$_POST["matricula"];
$nome_a           = $_POST["nome_aluno"];
$dt_nasc          = $_POST["dt_nasc"];
$sexo             = $_POST["sexo_aluno"];
$nome_p           = $_POST["nome_pai"];
$nome_m           = $_POST["nome_mae"];
$rg           	  = $_POST["rg_aluno"];
$cpf              = $_POST["cpf_aluno"];

$fdg_dt_nasc = date('Y-m-d',strtotime($dt_nasc)); 

$sql = "update aluno set ";
$sql .= "nome_aluno='".$nome_a."', nome_pai='".$nome_p."', nome_mae='".$nome_m."',";
$sql .= "dt_nasc='".$fdg_dt_nasc."', rg_aluno='".$rg."', cpf_aluno='".$cpf."', sexo_aluno='".$sexo."'";
$sql .= "where matricula = '".$mat."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());
if($resultado){
    header('Location: \dashboard_3/index.php?page=lista_alu&msg=2');
    mysqli_close($con);
}else{
    header('Location: \dashboard_3/index.php?page=lista_alu&msg=4');
    mysqli_close($con);
}
?>