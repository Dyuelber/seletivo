<?php 
require_once '../controller/ConLista.php';

$dados = selectCursos();

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
		<header class="mdl-layout__header mdl-color--grey-200 mdl-color-text--grey-900">
			<div class="mdl-layout__header-row">
				<h1 class="mdl-layout-title">Matrícula</h1>
				<div class="mdl-layout-spacer"></div>
				<a id="bt" href="../index.php">Home</a>
			</div>
		</header>

		<main class="conteudo-index mdl-layout__content ">	
			<div class="mdl-grid">
				<div class="col mdl-cell mdl-cell--2-col mdl-cell--4-col-phone mdl-cell--8-col-tablet">
					<form id="sel" class="form" method="post" action="../controller/ConAluno.php">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="campo" name="nome" required>
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="campo">Nome Completo</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="sample1" name="endereco" required>
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1">Endereço</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="sample1" name="bairro" required>
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1">Bairro</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="number" id="sample1" name="numero" required>
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1">Número</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="number" id="sample1" name="rg" required>
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1">Identidade</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="number" id="sample1" name="cpf" required>
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1">Cpf</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="sample1" name="cidade" required>
							<label class="mdl-textfield__label mdl-color-text--grey-900" for="sample1">Cidade</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="date" value="1999-01-10" id="sample1" name="nascimento" required>
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
               			
						<button class="btMatr mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" name="novaMatricula">Matricular
						</button>
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