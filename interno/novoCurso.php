<?php
require_once '../controller/ConLista.php';

if(isset($_GET['edit']) && $_GET['edit'] != ""){
	
	$temp = true;
	$id = $_GET['edit'];
	$obj = buscaCurso($id);
	$curso = $obj['curso'];
	$horas = $obj['horas'];
	$valor = $obj['valor'];
	$desc = $obj['descricao'];
	$vagas = $obj['vagas'];
}
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
				<h1 class="mdl-layout-title">Novo Curso</h1>
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
				<div class="col mdl-cell mdl-cell--2-col mdl-cell--4-col-phone mdl-cell--8-col-tablet">
					
					<form class="formulario" method="post" action="../controller/ConCurso.php">
		  				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		   					<input class="mdl-textfield__input" type="text" id="valor1" name="curso" required value="<?php echo $curso; ?>">
		   					<label class="mdl-textfield__label mdl-color-text--grey-700" for="valor1">Nome do Curso</label>
		  				</div>

		  				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	    					<input class="mdl-textfield__input" type="number" id="valor2" name="horas" required value="<?php echo $horas; ?>">
	    					<label class="mdl-textfield__label mdl-color-text--grey-700" for="valor2">Horas do Curso</label>
	    					<span class="mdl-textfield__error">Coloque apenas números</span>
	  					</div>

	  					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	    					<input class="mdl-textfield__input" type="number" id="valor2" name="valor" required value="<?php echo $valor ?>">
	    					<label class="mdl-textfield__label mdl-color-text--grey-700" for="valor2">Valor </label>
	    					<span class="mdl-textfield__error">Coloque apenas números</span>
	  					</div>

	  					<div class="mdl-textfield mdl-js-textfield">
	    					<textarea class="mdl-textfield__input" type="text" rows= "8" cols="5" id="valor3" name="descricao"><?php echo $desc; ?></textarea>
	    					<label class="mdl-textfield__label mdl-color-text--grey-700" for="valor3">Descrição do curso</label>
	  					</div>

	  					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	    					<input class="mdl-textfield__input" type="number" id="valor4" name="vagas" value="<?php echo $vagas; ?>">
	    					<label class="mdl-textfield__label mdl-color-text--grey-700" for="valor4">Vagas</label>
	    					<span class="mdl-textfield__error">Coloque apenas números</span>
	  					</div>
	  					<input type="hidden" name="id" value="<?php echo $id; ?>">
	  					<?php if($temp == true) { ?>
								<button class="btfor mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" name="editar">Editar
								</button>
						<?php } else { ?>
								<button class="btfor mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" name="novoCurso">Criar
						</button>
						<?php } ?>

					</form>
					<script type="text/javascript">
							document.getElementById('valor1').focus();
					</script>
					
				</div>				
			</div>			
		</main>
	</div>
</body>
</html>