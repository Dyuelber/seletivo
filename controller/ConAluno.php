<?php
require_once '../model/Aluno.php';
require_once '../model/AlunoDao.php';
require_once '../model/CursoDao.php';

if(isset($_POST['novaMatricula'])){
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$numero = $_POST['numero'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$cidade = $_POST['cidade'];
	$nascimento = $_POST['nascimento'];
	$sexo = $_POST['sexo'];
	$curso = $_POST['curso'];

	$aluno = new Aluno($nome, $endereco, $bairro, $numero, $rg, $cpf, $cidade, $nascimento, $sexo, $curso);
	$banco = new AlunoDao();
	$nomeCurso = new CursoDao();

	$true = $nomeCurso->diminuirVagas($curso);

	if($true == true){
		if($banco->novoAluno($aluno)){
			header("location: ../index.php");
		}
	}
}

if(isset($_POST['editarAluno'])){
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$numero = $_POST['numero'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$cidade = $_POST['cidade'];
	$nascimento = $_POST['nascimento'];
	$sexo = $_POST['sexo'];
	$curso = $_POST['curso'];
	$id = $_POST['id'];
	$id -= 82789; 

	$aluno = new Aluno($nome, $endereco, $bairro, $numero, $rg, $cpf, $cidade, $nascimento, $sexo, $curso);
	$banco = new AlunoDao();
	$nomeCurso = new CursoDao();

	$true = $nomeCurso->diminuirVagas($curso);

	if($true == true){
		if($banco->editarAluno($id, $aluno)){
			header("location: ../interno/alunos.php");
		}
	}
}

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$id -= 82789;

	$aluno = new AlunoDao();
	if($aluno->excluirAluno($id)){
		header("location: ../interno/alunos.php");
	}
}