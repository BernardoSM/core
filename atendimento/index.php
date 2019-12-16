<?php
	include("lib.php");

	$whitelist = array(
	    '127.0.0.1',
	    '::1'
	);

	if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
		$dealId = $_GET["id"];

	    if (verify_deal_id($dealId) == 0) {
		  header("Location: https://liberfly.com.br");
		  die();
		}
	}else{
		$dealId = 0;
	}
?>

<!doctype html>
<html lang="pt-br">
	<head>
		<title>NPS Liberfly - Atendimento</title>
		<meta name="description" content="Pesquisa de satisfação do usuário da Liberfly"><!-- Max 155 characters -->
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--Dependencies-->
		<link rel="stylesheet" href="../dist/css/alldep.min.css" /> 

		<!-- Css Project -->
		<link rel="stylesheet" href="../dist/css/style.css" />

		<!--Tag Hotjar-->

		<!--Tag Analytics-->

		<!-- twitter card data (https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/summary-card-with-large-image) -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@publisher_handle">
		<meta name="twitter:title" content="NPS Liberfly"><!-- Max 70 characters -->
		<meta name="twitter:description" content="Que tal nos contar sua experiência?"><!-- Max 200 characters -->
		<meta name="twitter:image" content=""><!-- share image, min dimensions: 280x150, file size < 8MB -->
		<meta name="twitter:image:alt" content="NPS Liberfly">

		<!-- open graph data -->
		<meta property="og:title" content="NPS Liberfly"><!-- Max 70 characters -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://nps.liberfly.com.br/atendimento/"><!-- current page URL -->
		<meta property="og:image" content=""><!-- share image, min dimensions: 1200x630, file size < 8MB -->
		<meta property="og:description" content="Que tal nos contar sua experiência?">
		<meta property="og:site_name" content="NPS Liberfly">
	</head>
	<body>

		<div id="background-wrap">
		    <div class="x1">
		        <div class="cloud"></div>
		    </div>

		    <div class="x2">
		        <div class="cloud"></div>
		    </div>

		    <div class="x3">
		        <div class="cloud"></div>
		    </div>

		    <div class="x4">
		        <div class="cloud"></div>
		    </div>

		    <div class="x5">
		        <div class="cloud"></div>
		    </div>
		</div>

		<section id="nps">
			<div class="container">
				<div class="nps-content">
					<div class="nps-header">
						<img src="../dist/img/logo-g.png" alt="Logo Liberfly">
						<p class="label">
							Pesquisa de satisfação
						</p>
						<h2 class="title">
							Que tal nos contar sua experiência com nosso atendimento?
						</h2>
					</div>
					
					<div class="nps-form">
						<p class="question">
							O quanto você nos recomendaria para alguém?
						</p>
						<div class="ranger">								
							<div class="ranger-levels">
								<div class="error">
									<div class="message">Selecione um valor</div>
									<i class="fas fa-ban"></i>
								</div>
								<p></p>
								<p>1</p>
								<p>2</p>
								<p>3</p>
								<p>4</p>
								<p>5</p>
								<p>6</p>
								<p>7</p>
								<p>8</p>
								<p>9</p>
								<p>10</p>
							</div>
							<input id="cloud-range" type="range" min="0" max="10" step="1" value="0">
							<div class="ranger-text">
								<p class="ranger-text__start">
									Não recomendaria, fiquei insatisfeito
								</p>
								<p class="ranger-text__end">
									Recomendaria com certeza, muito bom
								</p>
							</div>
						</div>
						<p class="question">
							Deixe alguma sugestão
						</p>
						<textarea placeholder="Digite aqui..." rows="5" id="comment"></textarea>
						<button class="btn btn-primary" id="btn-send" onclick="checkForm('<?=$dealId?>');">
							<span class="text">Enviar</span>
							<div class="spinner-border text-light" role="status">
							  <span class="sr-only">Loading...</span>
							</div>
						</button>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Script Project -->
		<script src="../dist/js/alldep.min.js" crossorigin="anonymous"></script>
		<script src="../dist/js/scripts.js" crossorigin="anonymous"></script>
	</body>
</html>