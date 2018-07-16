<?php
require_once '../controller/ConLista.php';

$cursos = listar();

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
	<link rel="stylesheet" type="text/css" href="../assets/css/material.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
	<script type="text/javascript" src="../assets/css/material.min.js"></script>
	<style>	
	</style>
</head>
<body>
	
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<h1 class="mdl-layout-title">ContaSchool</h1>
				<div class="mdl-layout-spacer"></div>
				<a id="sair" href="../index.php">Sair</a>
			</div>
		</header>
		
		<div class="mdl-layout__drawer">
			<h2 class="mdl-layout-title">ContaSchool</h2>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="home.php">Home</a>
				<a class="mdl-navigation__link" href="novoCurso.php">Novo Curso</a>
				<a class="mdl-navigation__link" href="cursos.php">Cursos</a>
				<a class="mdl-navigation__link" href="listar.php">Lista de Cursos</a>
				<a class="mdl-navigation__link" href="alunos.php">Alunos</a>
			</nav>
		</div>
		
		<main class="conteudo-index mdl-layout__content">	
			
			<div class="mdl-grid">
				<?php while ($i = $cursos->fetch()) { ?>
				<div class="col mdl-cell mdl-cell--2-col mdl-cell--4-col-phone mdl-cell--8-col-tablet">
				<!--estrutura final-->	
					<div class="mdl-card mdl-shadow--4dp">
						<div class="mdl-card__title nome">
					 		<h4 class="mdl-card__title-text"><?php echo $i['curso']; ?></h4>
					  	</div>
					  	<div class="texto mdl-card__supporting-text">
					    	Valor : R$ <?php echo $i['valor']; ?><br>
					    	Vagas : <?php echo $i['vagas']; ?>
					  	</div>
					  	<div class="mdl-card__actions mdl-card--border">
					    	<!--<a class="mdl-button" href="../paginas/conteudo.php?token=<?php //echo $i['id'] + 82789;?>">Ver detalhes</a>-->
						</div>
					</div>
				
				</div>
				<?php } ?>

			</div>
		</main>
		<!--<footer class="footer mdl-mini-footer">
	        <div class="mdl-mini-footer--left-section">
	           	<ul class="mdl-mini-footer--link-list">
	            	<li><a href="#">Sobre</a></li>
	              	<li><a href="#">predelmlk</a></li>
	              	<li><a href="#">cadlcmdalcmlk</a></li>
	            </ul>
	        </div>
      	</footer>
      	-->
	</div>

</body>
</html>
