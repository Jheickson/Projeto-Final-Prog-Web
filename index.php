<!DOCTYPE html>

<html>

	<head>

		<Title>PromoWatch - Início</Title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
		<link rel="stylesheet" href="style.css">

	</head>

	<body class="w3-light-grey">

		<main>

			<!-- Barra lateral -->

			<nav class="w3-sidebar w3-collapse w3-animate-left w3-dark-grey" id="sidebar" style="width:20%">

			<div class="w3-dark-grey">
				<div class="w3-container">
				<h1><a href="index.php" target="_self" style="text-decoration:none">PromoWatch</a></h1>
				</div>
			</div>

		<a href="https://github.com/Jheickson/Projeto-Final-Prog-Web" target="blank" class="w3-bar-item w3-button" style="width:100%;">Link para o projeto no Github<br>

		<img src="https://cdn-icons-png.flaticon.com/512/1051/1051326.png" width="50%" height="50%" alt="Github" title="Github">

	</a>
		<a href="https://github.com/Jheickson" target="blank" class="w3-bar-item w3-button" style="width:100%;">Perfil do discente no Github <br>

		<img id="fotoPerfil" src="img/Felipe.jpg" width="50%" height="50%" alt="Jheickson Felipe" title="Jheickson Felipe">


	</a>
		<a href="sobre.php" class="w3-bar-item w3-button" style="width:100%;">Sobre</a>

			</nav>

			<!-- Conteúdo principal -->
			<div class="w3-main w3-padding" style="margin-left:20%">

				<header><h3><b>Lista dos jogos atualmente em promoção</b></h3></header>

				<div class="w3-row-padding">

				<!-- Curl -->

				<?php

					function updateCurl($offset){

						$url = "https://api.isthereanydeal.com/v01/deals/list/?key=c22b79a6422708915183a0b4ae493ffc128a8e25&limit=300&offset=$offset&region=br2&country=BR&shops=steam&sort=time%3Adesc";


						$ch = curl_init();

						curl_setopt($ch, CURLOPT_URL, $url);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
						curl_setopt($ch, CURLOPT_HEADER, FALSE);

						$response = curl_exec($ch);
						curl_close($ch);


						//var_dump($response);
						$response_arr = json_decode($response);
						//var_dump($response_arr);


						foreach ($response_arr->data->list as $item){

							$titulo = $item->title;

							if (strlen($titulo) > 30){

								$titulo = substr($titulo , 0 , 30) . "...";

							}

							$preco_novo = "R$ " . number_format($item->price_new, 2);
							$preco_velho = "R$ " . number_format($item->price_old, 2);
							$preco_desconto = $item->price_cut;
							$preco_descontado = "R$ " . number_format(($item->price_old) * ($item->price_cut / 100), 2);
							$link = $item->urls->buy;
							$steamID = (int)filter_var($link, FILTER_SANITIZE_NUMBER_INT);

							echo '

								<div class="w3-third w3-card w3-margin-bottom w3-row-padding">

								<div class="parent">
									<a href="' , $link , '" target="blank"> <img src="https://via.placeholder.com/616x353?text=Imagem+Não+Encontrada" alt="',$titulo,'" style="width: 100%;" class="w3-hover-capacity w3-container"> </a>

									<a href="' , $link , '" target="blank"> <img id="gameHeader" src="https://cdn.cloudflare.steamstatic.com/steam/apps/', $steamID ,'/capsule_616x353.jpg" alt="',$titulo,'" style="width: 100%;" class="over-img w3-hover-capacity w3-container" onerror=" <script>teste(); <\script>"> </a>
								</div>

								<div class="w3-container w3-white" style="width: 100%">

									<p style="font-size: 1em"><b> ' , $titulo ,'</b><br>
									Preço Atual: ' , $preco_novo ,' <br>
									' , $preco_desconto , '% de Desconto (' , $preco_descontado , ')<br>
									Preço Normal: ' , $preco_velho , '</p>

								</div>
								
								</div>
								
							';

						}

					}

					updateCurl(0);

				?>
				
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