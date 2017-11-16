<!-- abaixo esta uma provavel falha -->

$(document).ready(function(){
		$(".clique").click(function(){
		$(".logov").toggleClass("escondido")
	 })

})

<!-- abaixo esta um provavel acerto -->

$(document).ready(function(){

	if (tipo == 1) {
		arquivo = "/home/aluno/public_html/3trimestre-master/portuga 1info1/imagens/logov.png"
	}

		if (tipo == 2) {
		arquivo = "/home/aluno/public_html/3trimestre-master/portuga 1info1/imagens/logo.png"
	}

		if (tipo == 3) {
		arquivo = "/home/aluno/public_html/3trimestre-master/portuga 1info1/imagens/logoc.png"
	}
	


	$(".vela").onclick(function(){
		document.getElementById("vela").src = arquivo
	}

	$id="luz" onmouseout= "mudalampada" (1)
})

<!--  

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Objetivo, transformar o logo em algo interativo(interagir com o click e com o mouse passando pelo mesmo.)//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

-->
