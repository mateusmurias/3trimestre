<?php
include("cabecalho.php");
?>

	<article class="coluna80">
	<section class="lista">
		<ul>

<?php
include("alunos.php");
$alunos = listaAlunosTurma('1info1');
foreach ($lista as $alunos) {
?>

		<li><a href="listaAlunos.php?cod=<?=$alunos['matricula']?>"><?=$alunos['nome']?></a></li>	
<?php 
}
 ?>

</ul>
	</section>
	</article>
<?php
	include("rodape.php");

	?>


<script>
  CsvToHtmlTable.init({
    csv_path: 'alunos.csv',
    element: 'table-container', 
    allow_download: true,
    csv_options: {separator: ';', delimiter: '"'},
    datatables_options: {"paging": false}
  });
</script>
