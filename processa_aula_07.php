<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title></title>
			<link rel="stylesheet" type="text/css" href="_css/estilo_processa_aula_07.css">
		</head>
		<body>
			<section>
				
				<?php 
					$num1 = $_POST['num1'];
					$num2 = $_POST['num2'];

					$texto1 = "$num1 é maior que $num2";
					$texto2 = "$num1 é menor que $num2";
					$texto3 = "$num1 e $num2 Sao iguais!";
					if ($num1 > $num2) {
						echo  '<font class="maior">' .$texto1. '</font>';
					}else if ($num1 < $num2) {
						echo '<font class="maior">' .$texto2. '</font>';
					}else {
						 echo '<font class="maior">' .$texto3. '</font>';
					}


				 ?>
				 <a href="aula_07.php"><button><font class="botao-voltar">voltar</font></button></a>


			</section>
