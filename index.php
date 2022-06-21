<!DOCTYPE html>

<html>

	<head>

		<Title>PromoWatch - Início</Title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="style.css"> -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

				<!-- Teste DB -->
				<!-- <?php

				// include_once("dbh.php");

				// $result = mysqli_query($conn, "SELECT * FROM `steam apps`");

				//echo mysqli_num_rows($result);

				// while ($row = $result->fetch_array()) {

				// 	$appID = $row["appID"];
				// 	$name = $row["name"];
				// 	$is_free = $row["is_free"];
				// 	$price_final_formatted = $row["price_final_formatted"];
				// 	$discount_percent = $row["discount_percent"];
				// 	$final = "R$ " . number_format($row["final"]/100, 2);
				// 	$initial = "R$ " . number_format(($row["initial"])/100, 2);

				?> -->

				<!-- Teste Curl -->

				<?php

					include_once("curl.php");

					foreach ($response_arr->data->list as $item){

						$titulo = $item->title;
						$preco_novo = "R$ " . number_format($item->price_new, 2);
						$preco_velho = "R$ " . number_format($item->price_old, 2);
						$preco_desconto = $item->price_cut;
						$preco_descontado = "R$ " . number_format(($item->price_old) * ($item->price_cut / 100), 2);
						$link = $item->urls->buy;
						$steamID = (int)filter_var($link, FILTER_SANITIZE_NUMBER_INT);

						echo '

							<div class="w3-third w3-container w3-margin-bottom" style="height: auto">
			
								<a href="' , $link , '" target="blank"> <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/', $steamID ,'/capsule_616x353.jpg" alt="',$titulo,'" style="width: 100%;" class="w3-hover-capacity"> </a>

								<div class="w3-container w3-white">

									<p style="font-size: 1em"><b> ' , $titulo ,'</b><br>
									Preço Atual: ' , $preco_novo ,' <br>
									' , $preco_desconto , '% de Desconto (' , $preco_descontado , ')<br>
									Preço Normal: ' , $preco_velho , '</p>

								</div>

							</div>

						';

					}

				?>


				<!-- 


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

					-->



				</div>

				<!-- Teste Javascript -->

				<!-- <input type="button" value="Teste" onclick="jogoteste()"> -->



				<!-- Paginação -->

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
