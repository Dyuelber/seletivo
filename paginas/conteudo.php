<?php 
require_once '../controller/ConLista.php';
if(isset($_GET['token']) && isset($_GET['token']) != ""){
	$id = $_GET['token'];
	$obj = buscaCurso($id);
	$curso = $obj['curso'];
	$hora = $obj['horas'];
	$valor = $obj['valor'];
	$desc = $obj['descricao'];
	$vagas = $obj['vagas'];
}
?>
<!doctype html>
<html lang="pt-br">
	<head>
   	<meta charset="utf-8">
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
   	<title>ContaSchool</title>
   <!-- Add to homescreen for Chrome on Android -->
   	<meta name="mobile-web-app-capable" content="yes">
   <!-- Add to homescreen for Safari on iOS -->
   	<meta name="apple-mobile-web-app-capable" content="yes">
   	<meta name="apple-mobile-web-app-status-bar-style" content="black">
   	<meta name="apple-mobile-web-app-title" content="">
   <!-- Tile icon for Win8 (144x144 + tile color) -->
   	<meta name="msapplication-TileColor" content="#3372DF">
   	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
   	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   	<!--<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>-->
   	<script type="text/javascript" src="../assets/css/material.min.js"></script>
   	<link rel="stylesheet" href="../assets/css/material.min.css">
   	<link rel="stylesheet" href="../assets/css/estilo.css">
	</head>
<body>
	<div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-300">
   	<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-800">
      	<div class="mdl-layout__header-row">
        		<h2 class="mdl-layout-title">ContaSchool</h2>
         	<div class="mdl-layout-spacer"></div>
         <!--Botao de menu-->
				<button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
  					<i class="material-icons">more_vert</i>
				</button>
				<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
  					<li class="mdl-menu__item"><a id="bt" href="../index.php">Home</a></li>
  					<li class="mdl-menu__item"><a id="bt" href="matricula.php">Matricular</a></li>
				</ul>
			<!--Botao de menu-->
      	</div>
   	</header>		
   	<div class="demo-ribbon"></div>
	</div>
		<main class="demo-main mdl-layout__content">
			<div class="demo-container mdl-grid">
		      	<div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
		         <div class="demo-content mdl-color--white mdl-shadow--2dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
		            <h1 class="conteudo-titulo"><?php echo $curso; ?></h1>
		            <div class="demo-crumbs mdl-color-text--grey-500">
		            	ContaSchool Contabilidade
		            	<h5>Valor : <?php echo $valor,",00 R$ | ";  echo $hora, " horas"; ?></h5>
		            	<h6>Vagas : <?php echo $vagas; ?></h6>
		         	</div>
		         </div>
		   	</div>   
		    <div class="demo-container mdl-grid mdl-color--grey-300">
				<div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
			    	<div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
			        	<h4>Sobre o Curso</h4>
			        	<p><?php echo $desc; ?></p>
			      	</div>
		    </div>
	        	
		    <div class="demo-container mdl-grid mdl-color--grey-300">    
		   		<div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
		         	<div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">  
		            	<h4>Mercado de Trabalho</h4>
		            	<p>
		               		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		            	</p>
		        	</div>
		    </div>
		    <!--
	      	<footer class="demo-footer mdl-mini-footer">
	        	<div class="mdl-mini-footer--left-section"></div>
	      	</footer>-->	
	   	</main>
</body>
</html>
