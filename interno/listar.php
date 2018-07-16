<?php 
require_once '../controller/ConLista.php';

$dados = listar();
$cont = 0;
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
				<h1 class="mdl-layout-title">Lista de Cursos</h1>
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
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
						  <thead>
						    <tr>
						      <th class="mdl-data-table__cell--non-numeric">Curso</th>
						      <th>Vagas</th>
						      <th>Valor</th>
						    </tr>
						  </thead>
						  <tbody>
						 <?php while($i = $dados->fetch()){ ?>
						 	<?php $cont += 1; ?>
						    <tr>
						      <td class="mdl-data-table__cell--non-numeric"><?php echo $i['curso']; ?></td>
						      <td><?php echo $i['vagas']; ?></td>
						      <td><?php echo $i['valor']; ?></td>
						    </tr>
						<?php } ?>
 						  </tbody>
 						  <h5><?php echo $cont, " - cursos";?></h5>
					</table>
				</div>
			</div>
		
		</main>
	
	</div>
</body>
</html>	