<?php

	$nomeJogo= "Dark Souls";

?>



<!DOCTYPE html>

<html>

	<head>

		<Title>PromoWatch - Início</Title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
		<script src="js/scripts.js">
		</script>

	</head>

	<!-- Bordas para melhor visualização de espaçamentos -->
	<!-- <style>
		* {
			border: 1px dotted;
			border-color: red;
		}
	</style> -->

	<body class="w3-light-grey">

		<main>

			<!-- Barra lateral -->

			<nav class="w3-sidebar w3-collapse w3-animate-left w3-dark-grey" id="sidebar" style="width:20%">

			<div class="w3-dark-grey">
				<div class="w3-container">
				<h1><a href="index.php" target="_self" style="text-decoration:none">PromoWatch</a></h1>
				</div>
			</div>

		<a href="#" class="w3-bar-item w3-button" style="width:100%;">Cadastro de usuários <br> (Em breve)</a>
		<a href="#" class="w3-bar-item w3-button" style="width:100%;">Lista de interesse <br> (Em breve)</a>
		<a href="sobre.php" class="w3-bar-item w3-button" style="width:100%;">Sobre</a>

			</nav>

			<!-- Conteúdo principal -->
			<div class="w3-main w3-padding" style="margin-left:20%">

				<header><h3><b>Lista dos jogos atualmente em promoção</b></h3></header>

				<div class="w3-row-padding">

					<div class="w3-third w3-container w3-margin-bottom">
	
						<img src="http://via.placeholder.com/300x250" alt="Exemplo 1" style="width: 100%;" class="w3-hover-capacity">
						<div class="w3-container w3-white">

							<p><b> <?php echo $nomeJogo ?> </b></p>
							<p>Preço Atual: R$ 00,00 (0% OFF)</p>
							<p>Menor Preço: R$ 00,00 (00/00/0000)</p>
							<p>Preço Normal: R$ 00,00</p>
	
						</div>
	
					</div>

					<div class="w3-third w3-container w3-margin-bottom">
	
						<img src="http://via.placeholder.com/300x250" alt="Exemplo 1" style="width: 100%;" class="w3-hover-capacity">
						<div class="w3-container w3-white">

							<p><b>Placeholder exemplo 2</b></p>
							<p>Preço Atual: R$ 00,00 (0% OFF)</p>
							<p>Menor Preço: R$ 00,00 (00/00/0000)</p>
							<p>Preço Normal: R$ 00,00</p>
	
						</div>
	
					</div>

					<div class="w3-third w3-container w3-margin-bottom">
	
						<img src="http://via.placeholder.com/300x250" alt="Exemplo 1" style="width: 100%;" class="w3-hover-capacity">
						<div class="w3-container w3-white">

							<p><b>Placeholder exemplo 3</b></p>
							<p>Preço Atual: R$ 00,00 (0% OFF)</p>
							<p>Menor Preço: R$ 00,00 (00/00/0000)</p>
							<p>Preço Normal: R$ 00,00</p>
	
						</div>
	
					</div>

				</div>

				<div class="w3-row-padding">

					<div class="w3-third w3-container w3-margin-bottom">
	
						<img src="http://via.placeholder.com/300x250" alt="Exemplo 1" style="width: 100%;" class="w3-hover-capacity">
						<div class="w3-container w3-white">

							<p><b>Placeholder exemplo 4</b></p>
							<p>Preço Atual: R$ 00,00 (0% OFF)</p>
							<p>Menor Preço: R$ 00,00 (00/00/0000)</p>
							<p>Preço Normal: R$ 00,00</p>
	
						</div>
	
					</div>

					<div class="w3-third w3-container w3-margin-bottom">
	
						<img src="http://via.placeholder.com/300x250" alt="Exemplo 1" style="width: 100%;" class="w3-hover-capacity">
						<div class="w3-container w3-white">

							<p><b>Placeholder exemplo 5</b></p>
							<p>Preço Atual: R$ 00,00 (0% OFF)</p>
							<p>Menor Preço: R$ 00,00 (00/00/0000)</p>
							<p>Preço Normal: R$ 00,00</p>

						</div>

					</div>

					<div class="w3-third w3-container w3-margin-bottom">

						<img src="http://via.placeholder.com/300x250" alt="Exemplo 1" style="width: 100%;" class="w3-hover-capacity">
						<div class="w3-container w3-white">

							<p><b>Placeholder exemplo 6</b></p>
							<p>Preço Atual: R$ 00,00 (0% OFF)</p>
							<p>Menor Preço: R$ 00,00 (00/00/0000)</p>
							<p>Preço Normal: R$ 00,00</p>

						</div>

					</div>

					<!-- Paginação -->

					
				</div>

				<!-- Teste Javascript -->

				<input type="button" value="Teste" onclick="jogoteste()">

				<div class="w3-center">

					<div class="w3-bar">

						<a href="#" class="w3-bar-item w3-button">&laquo;</a>
						<a href="#" class="w3-button">1</a>
						<a href="#" class="w3-button">2</a>
						<a href="#" class="w3-button">3</a>
						<a href="#" class="w3-button">4</a>
						<a href="#" class="w3-button">&raquo;</a>

					</div>

				</div>
				
				<!-- Rodapé -->
				<div class="w3-row w3-container">
					<div class="w3-container w3-border-bottom">

						<h3><b>Rodapé</b></h3>
						<p>Projeto para a disciplina de Programação para Web da Universidade Federal do Oeste do Pará.<br>
						Docente: Rennan José Maia Da Silva <br>
						Discente: Jheickson Felipe Sousa Santos</p>

					</div>

				</div>



			</div>

		</main>

	</body>

</html>