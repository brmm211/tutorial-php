<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>Curso de PHP</title>
		</head>
		<body>
			<?php
				$opcao = 0;
				$frutas = array("maçã","Morango","Pêra");
				$resultado = ($opcao == 1)? $frutas[1] : "opção inválida";
				echo $resultado; 

			?>
		</body>
	</html>