<?php 
require_once '../controller/ConLista.php';

$dados = selectCursos();
if(isset($_GET['edit']) && $_GET['edit'] != ""){
	$temp = true;
	$id = $_GET['edit'];
	$obj = buscaAluno($id);
	$nome = $obj['nome'];
	$endereco = $obj['endereco'];
	$bairro = $obj['bairro'];
	$num = $obj['numero'];
	$rg = $obj['rg'];
	$cpf = $obj['cpf'];
	$cidade = $obj['cidade'];
	$nascimento = $obj['nascimento'];
	$sexo = $obj['sexo']; 
	$curso = $obj['curso'];
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
	
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-color--grey-100">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<h1 class="mdl-layout-title">Editar</h1>
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

		<main class="conteudo-index mdl-layout__content ">	
			<div class="mdl-grid">
				<div class="col mdl-cell mdl-cell--2-col mdl-cell--4-col-phone mdl-cell--8-col-tablet">
					<form id="sel" class="form" method="post" action="../controller/ConAluno.php">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="campo" name="nome" required value="<?php echo $nome; ?>">
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="campo">Nome Completo</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="sample1" name="endereco" required value="<?php echo $endereco; ?>">
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1">Endereço</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="sample1" name="bairro" required value="<?php echo $bairro; ?>">
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1">Bairro</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="number" id="sample1" name="numero" required value="<?php echo $num; ?>">
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1">Número</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="number" id="sample1" name="rg" required value="<?php echo $rg; ?>">
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1">Identidade</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="number" id="sample1" name="cpf" required value="<?php echo $cpf; ?>">
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1">Cpf</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="sample1" name="cidade" required value="<?php echo $cidade; ?>">
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1">Cidade</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="date" value="2018-06-09" id="sample1" name="nascimento" required value="<?php echo $nascimento; ?>">
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1"></label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<select name="curso" form="sel" class="select">
								<option>Cursos</option>
								<?php while($i = $dados->fetch()) { ?>
									<option value="<?php echo $i['curso']; ?>"><?php echo $i['curso']; ?></option>	
								<?php } ?>
							</select>
						</div>
						
						<label class="mdl-radio" for="sexo">Sexo :</label><br>
		    			<input class="mdl-radio__button" name="sexo" type="radio" value="M"> <label for="M"> Masculino </label><br>
		    			<input class="mdl-radio__button" name="sexo" type="radio" value="F"> <label for="F"> Feminino </label>
               			
               			<input type="hidden" name="id" value="<?php echo $id; ?>">
               			<?php if($temp == true) { ?>
								<button class="btfor mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" name="editarAluno">Editar
								</button>
						<?php } else { ?>
								<button class="btfor mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" name="novaMatricula">Criar
						</button>
						<?php } ?>
					</form>
					<script type="text/javascript">
						document.getElementById('campo').focus();
					</script>
				</div>
			</div>
		</main>
	</div>
</body>
</html>