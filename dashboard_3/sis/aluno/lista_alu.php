<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-3">
			<h2>Itens</h2>
		</div>
		<div class="col-md-5">
		<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Pesquisar	</button>
      </form>
		</div>
		<div class="col-md-4">
			<!-- Chama o Formulário para adicionar alunos -->
			<a href="?page=fcad_alu" class="btn btn-primary pull-right h2">Novo Item</a> 
		</div>
	</div>
	<hr/>

	<div> <?php include "mensagens.php"; ?> </div>

	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			<?php
			$quantidade = 5;

			$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
			$inicio = ($quantidade * $pagina) - $quantidade;
			$data_all = mysqli_query($con, "select * from aluno order by matricula asc limit $inicio, $quantidade;") or die(mysqli_error());
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<td><strong>ID</strong></td>"; 
				echo "<td><strong>Nome001</strong></td>"; 
				echo "<td class='d-none d-md-table-cell'><strong>Nome002</strong></td>";
				echo "<td class='d-none d-md-table-cell'><strong>Nome003</strong></td>";
				echo "<td class='d-none d-md-table-cell'><strong>Data</strong></td>";
				echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data_all)){ 
					echo "<tr>";
					echo "<td>".$info['matricula']."</td>";
					echo "<td>dcdcdmcdkcmkm</td>";
					echo "<td class='d-none d-md-table-cell'> hbhsbhcbhcdhcb </td>";
					echo "<td class='d-none d-md-table-cell'> njsncjcnjdn </td>";
					echo "<td class='d-none d-md-table-cell'>".date('d/m/Y',strtotime($info['dt_nasc']))."</td>"; //Funções para converter formato da data do MySQL
					echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-success btn-xs' href=?page=view_alu&mat=".$info['matricula']."> Visualizar </a>";
					echo "<a class='btn btn-warning btn-xs' href=?page=fedit_alu&mat=".$info['matricula']."> Editar </a>"; 
					echo "<button type='button' class='btn btn-danger btn-xs' data-bs-toggle='modal' data-bs-target='#mdexclalu".$info['matricula']."'> Exlcluir</i></button></td>";
					echo "</div>";
					echo "
					<div class='modal fade' id='mdexclalu".$info['matricula']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
					<div class='modal-dialog'>
						<div class='modal-content'>
						<div class='modal-header'>
							<h1 class='modal-title fs-5' id='exampleModalLabel'>Excluir Item</h1>
							<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
						</div>
						<div class='modal-body'>
							Tem certeza que deseja excluir esse Item?
						</div>
						<div class='modal-footer'>
							<a href=?page=excluir_alu&matricula=".$info['matricula']." class='btn btn-danger'> Excluir </a>
							<button type='button' class='btn btn-outline-danger' data-bs-dismiss='modal'>Cancelar</button>
						</div>
						</div>
					</div>
					</div>";
				}
				echo "</tr></tbody></table>";
			?>				
		</div>
	</div>
	<!-- PAGINAÇÃO -->
	<div id="bottom" class="row">
			<div class="col-md-12">
				<?php
					$sqlTotal 		= "select matricula from aluno;";
					$qrTotal  		= mysqli_query($con, $sqlTotal) or die (mysqli_error());
					$numTotal 		= mysqli_num_rows($qrTotal);
					$totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

					$exibir = 3;

					$anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
					$posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

					echo "<ul class='pagination'>";
					echo "<li class='page-item'><a class='page-link' href='?page=lista_alu&pagina=1'> Primeira</a></li> "; 
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_alu&pagina=$anterior\"> Anterior</a></li> ";

					echo "<li class='page-item'><a class='page-link' href='?page=lista_alu&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

					for($i = $pagina+1; $i < $pagina+$exibir; $i++){
						if($i <= $totalpagina)
						echo "<li class='page-item'><a class='page-link' href='?page=lista_alu&pagina=".$i."'> ".$i." </a></li> ";
					}

					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_alu&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_alu&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";

				?>	
			</div>
		</div><!--bottom-->
</div>
