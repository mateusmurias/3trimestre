<?php

include("cabecalho.php");
include("professores.php");
?>
	<!-- conteudo principal -->
	<article class="coluna80">
			<section class="lista">
		<ul>
<?php

$lista = listaProfessores();

foreach ($lista as $professor) {

?>
<li><a href="detalhaProfessor.php?cod=<?=$professor['siape'] ?>"><?=$professor['nome'] ?></a></li>

<?php
 }

?>

		</ul>
	</section>
</article>

<?php

include("rodape.php")

?>