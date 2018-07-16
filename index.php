<?php 
require_once 'controller/ConHome.php';

$cursos = buscar();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>ContaSchool</title>
	<meta charset="utf-8">
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
   	<meta name="mobile-web-app-capable" content="yes">

   	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
   	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="assets/css/material.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
	<script type="text/javascript" src="assets/css/material.min.js"></script>
</head>
<body>
	
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-color--grey-200">
		<header class="mdl-layout__header mdl-color--grey-200 mdl-color-text--grey-900">
			<div class="mdl-layout__header-row">
				<h1 class="mdl-layout-title">ContaSchool</h1>
				<div class="mdl-layout-spacer"></div>
				<button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
  					<i class="material-icons">more_vert</i>
				</button>
				<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
					<li class="mdl-menu__item"><a id="bt" href="interno/home.php">Interno</a></li>
					<li class="mdl-menu__item"><a id="bt" href="paginas/matricula.php">Matricular</a></li>
				</ul>
			</div>
		</header>

		<main class="conteudo-index mdl-layout__content ">	
			<div class="mdl-grid">
				<?php while ($i = $cursos->fetch()) { ?>
				<div class="col mdl-cell mdl-cell--2-col mdl-cell--4-col-phone mdl-cell--8-col-tablet">
				<!--estrutura final-->	
					<div class="mdl-card mdl-shadow--4dp">
						<div class="mdl-card__title nome">
					 		<h4 class="mdl-card__title-text"><?php echo $i['curso']; ?></h4>
					  	</div>
					  	<div class="texto mdl-card__supporting-text">
					    	Valor : <?php echo $i['valor'], ",00 R$"; ?><br>
					    	Vagas : <?php echo $i['vagas']; ?>
					  	</div>
					  	<div class="mdl-card__actions mdl-card--border">
					    	<a class="mdl-button" href="paginas/conteudo.php?token=<?php echo $i['id'] + 82789;?>">Ver detalhes</a>
						</div>
					</div>
				
				</div>
				<?php } ?>

			</div>

		</main>	


	</div>	