<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<title>IMC</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<?php

	$nome = array($_POST['nome1'], $_POST['nome2']);
	$email = array($_POST['email1'], $_POST['email2']);



	//FUNCÕES DE PROCESSAMENTO DAS ENTRADAS		

	function imprimeNome($nome){

		for ($i=0; $i<2; $i++) { 
			
			echo("<b><br>Nome de quem possui cadastro: </b>" . $nome[$i]);
		}

	}	

	function verificaInscrito($nome){

		for ($i=0; $i<2; $i++){

			if($nome[$i]==$nome[$i]){
			 	echo ("Você já se inscreveu.");	
			}else{
				echo ("Inscrição efetuada com sucesso.");
			}
		}
	}		


	//CHAMADAS DAS FUNÇÕES


	echo("<br>");
	imprimeNome($nome);
	echo("<br>");
	verificaInscrito($nome);


	?>
	
	<br>
	<a href="index.php"> VOLTAR PARA A PÁGINA DE CADASTRO </a>

	</body>

</html>