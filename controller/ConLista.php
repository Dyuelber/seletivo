<?php 
require_once '../model/CursoDao.php';
require_once '../model/AlunoDao.php';

function listar(){
	$lista = new CursoDao();

	$cursos = $lista->exibirCursos();
	if($cursos != false){
		return $cursos;
	}
	return false;
}

$temp = false;

$curso = "";
$horas = "";
$valor = "";
$desc = "";
$vagas = "";

function buscaCurso($id){
	if(isset($id)){
		$id -= 82789;
		$curso = new CursoDao();
		$dados = $curso->selecionaCurso($id);
		if($dados != false){
			return $dados;		
		}
	}
	return false;
}

function selectCursos(){
	$dados = new CursoDao();
	$curso = $dados->nomeCurso();

	if($curso != false){
		return $curso;
	}
	return false;
}

$nome = "";
$endereco = "";
$bairro = "";
$num = "";
$rg = "";
$cpf = "";
$cidade ="";
$nascimento = "";
$sexo = "";
$cursoAluno = "";

function listaAlunos(){
	$lista = new AlunoDao();

	$alunos = $lista->exibirAlunos();
	if($alunos != false){
		return $alunos;
	}
	return false;
}

function buscaAluno($id){
	if(isset($id)){
		$id -= 82789;
		$aluno = new AlunoDao();
		$dados = $aluno->selecionaAluno($id);
		if($dados != false){
			return $dados;		
		}
	}
	return false;
}