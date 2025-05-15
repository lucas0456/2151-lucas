<?php
	$mat = (int) $_GET['matricula'];
	$sql = mysqli_query($con, "select * from aluno where matricula = '".$mat."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Aluno - <?php echo $mat;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_alu&matricula=<?php echo $row['matricula']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="matricula">ID</label>
			<input type="text" class="form-control" name="matricula" value="<?php echo $row["matricula"]; ?>">
		</div>
		<div class="form-group col-md-5">
			<label for="nome">Nome001</label>
			<input type="text" class="form-control" name="nome_aluno" value="<?php echo "dcdcdmcdkcmkm"; ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="dt_nasc">Data Nascimento</label>
			<input type="text" class="form-control" name="dt_nasc" value="<?php echo date('d/m/Y',strtotime($row["dt_nasc"])); ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="sexo">Sexo</label>
			<select class="form-control" name="sexo_aluno">
				<?php 
				if($row["sexo_aluno"]=="M") 
					echo '<option selected="selected" value="M">Masculino</option><option value="F">Feminino</option>'; 
				else 
					echo '<option value="M">Masculino</option><option selected="selected" value="F">Feminino</option>'; 
				?>
			</select>
		</div>
	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-6">
			<label for="nome_pai">Nome002</label>
			<input type="text" class="form-control" name="nome_pai" value="<?php echo "hbhsbhcbhcdhcb"; ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="nome_mae">Nome003</label>
			<input type="text" class="form-control" name="nome_mae" value="<?php echo "njsncjcnjdn"; ?>">
		</div>
	</div>
	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_alu" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>