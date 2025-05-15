<?php
	$mat = (int) $_GET['mat'];
	$sql = mysqli_query($con, "select * from aluno where matricula = '".$mat."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do Item - <?php echo $mat; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['matricula'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome001</strong></p>
			<p><?php echo "dcdcdmcdkcmkm";?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Data Nascimento</strong></p>
			<p><?php echo date('d-m-Y',strtotime($row['dt_nasc'])); ?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Sexo</strong></p>
			<p><?php echo $row['sexo_aluno'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<p><strong>Nome002</strong></p>
			<p><?php echo "hbhsbhcbhcdhcb";?></p>
		</div>
		<div class="col-md-6">
			<p><strong>Nome003</strong></p>
			<p><?php echo "njsncjcnjdn";?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_alu" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_alu&matricula=".$row['matricula']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_alu&matricula=".$row['matricula']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
