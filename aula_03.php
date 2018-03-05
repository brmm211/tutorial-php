<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>Curso de PHP</title>
		</head>
		<body>
			<?php
				$nota1 = 5;
				$nota2 = 3;
				$media = ($nota1+$nota2)/2;
				$situacao = ($media >= 7)? "Aprovado" : "Reprovado";

				echo "A média do aluno é: $media<br>";
				echo "A situação do aluno é: $situacao";


			?>
		</body>
	</html>