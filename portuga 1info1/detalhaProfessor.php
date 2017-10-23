<?php
	include("cabecalho.php");

	include("professores.php");

	$siape = $_GET['cod'];

	$professor = buscaProfessor($siape);
?>

	<div class="deatlhes-professor">
		<img src="<?=$professor['foto'] ?>">
		<p><?=$professor['nome']?></p>
		<p><?=$professor['email']?></p>
	</div>

<?php
	include("rodape.php");