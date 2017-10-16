<?php

///////////////////////////////////////////////////////////////////
//ARQUIVO COM FUNÇOES PARA MANIPULAÇÂO DOS DADOS DOS PROFESSORES //
///////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////
//          Função que contem a lista dos professores            //
///////////////////////////////////////////////////////////////////
	

	 function listaProfessores(){
	 	$professores = array();

	 	$dados = file("dados/professores.csv");
		foreach ($dados as $posicao =>$linha) {
			if ($posicao != 0) {
			$colunas = explode(",",$linha);

			$professor= array();
			$professor['siape'] = $colunas[0];
			$professor['nome'] = $colunas[1];
 			$professor['email'] = $colunas[2];
			$professor['foto'] = $colunas[3];	

			$professores[] = $professor;
		}
	}

	 	return $professores;

	}


///////////////////////////////////////////////////////////////////
//            Função que busca somente 1 professor               //
///////////////////////////////////////////////////////////////////


	function buscaProfessor($codigo){
		$professor = array();

		$dados = file("dados/professores.csv");
		foreach ($dados as $linha) {
			$colunas = explode(",",$linha);
			if ($colunas[0] == $codigo) {
				$professor['siape'] = $colunas[0];
				$professor['nome'] = $colunas[1];
				$professor['email'] = $colunas[2];
				$professor['foto'] = $colunas[3];
			}
		}

		return $professor;
	}
