<!DOCTYPE html>

<html>

	<head>

		<Title>PromoWatch - Sobre</Title>
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

        <p>O projeto PromoWatch tem como objetivo desenvolver uma página web que é capaz de pesquisar, identificar e mostrar promoções em lojas de jogos online (Steam, Epic, GOG, etc). O site irá exibir o preço atual mais baixo do jogo, o preço normal (sem desconto), o preço histórico mais baixo. Também terá a possibilidade da criação de uma lista de interesse (com um registro no site), que notificará o usuário caso algum item da lista entre em promoção.</p>

        <p>Este projeto tem grande influência e inspiração de sites como <a href="https://steamdb.info/" target="_blank">SteamDB</a> e <a href="https://steampeek.hu/" target="_blank">Steampeek</a>, que são ambos sites que já uso há algum tempo.</p>

        <p>Este ainda é meramente um esqueleto do projeto. Planejo adicionar várias outras funções utilizando JavaScript e PHP, e também melhorar a parte visual.</p>

        <p>Lista das implementações/melhoras planejadas:</p>
        <li>Melhorar a parte estética do site.</li>
        <li>Implementação do banco de dados com uma pequena lista de jogos (A versão final terá um banco de dados que é atualizado automaticamente conforme novas promoções apareçam).</li>
        <li>Melhorar a responsividade do site.</li>
        <li>Adicionar um cadastro de usuários.</li>
        <li>Adicionar uma forma de criação de listas de observação para os usuários.</li>
        <li>Adicionar uma forma de notificar os usuários de novas promoções que possam interessá-lo.</li>
        <li>Aberto à sugestões.</li>

        <!-- Rodapé -->
        <div class="w3-row w3-container w3-border-bottom w3-padding-32">
            <div class="w3-container">
    
                <h3><b>Rodapé</b></h3>
                <p>Projeto para a disciplina de Programação para Web da Universidade Federal do Oeste do Pará.<br>
                Docente: Rennan José Maia Da Silva <br>
                Discente: Jheickson Felipe Sousa Santos</p>
    
            </div>
    
        </div>

    </div>

	</body>

</html>