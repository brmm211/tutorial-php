<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="_css/estilo_aula_06.css">
			<title>Curso de PHP</title>
		</head>
		<body>
			<header><h1>Integrando formularios no PHP</h1></header>

			<section>

				<form method="post" action="">
					<input type="text" placeholder="Digite seu nome" name="nome" required autofocus="">
					<input type="text" placeholder="Digite sua idade" name="idade" required autofocus="">
					<input class="btn" type="submit" value="ok">
				</form>

				<?php
					$nome = isset($_POST['nome'])?$_POST['nome']:"";
					$idade = isset($_POST['idade'])?$_POST['idade']:"";

					echo "<br>" . "Nome: " . $nome;
					echo "<br>" . "Idade: " . $idade;

				?>
			</section>
			<footer>
				<h6>Autor: Maicon Semensato Rosa</h6>
			</footer>
		</body>
	</html>