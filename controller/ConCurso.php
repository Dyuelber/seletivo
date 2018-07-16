<?php 

require_once '../model/Curso.php';
require_once '../model/CursoDao.php';

if(isset($_POST['novoCurso']) ) {
	
	$curso = $_POST['curso'];
	$horas = $_POST['horas'];
	$valor = $_POST['valor'];
	$descricao = $_POST['descricao'];
	$vagas = $_POST['vagas'];
	
	$novo = new Curso($curso, $horas, $valor, $descricao, $vagas);
	$banco = new CursoDao();

	if($banco->criarCurso($novo)){
		//echo "<script>alert('Novo curso criado !'); window.href='../interno/novoCurso.php';</scritp>"; n funcionou
		header('location: ../interno/novoCurso.php'); // volta para pagina de cadastro (index)
	}
	//echo "<script>alert('Erro tente novamente !'); window.location.href='../interno/novoCurso.php';</scritp>";
	//header('location: ../interno/novoCurso.php'); // volta para pagina de cadastro (index)
			
}

if(isset($_POST['editar'])){
	//echo "<pre>";
	//print_r($_POST);
	//die;
	$curso = $_POST['curso'];
	$horas = $_POST['horas'];
	$valor = $_POST['valor'];
	$descricao = $_POST['descricao'];
	$vagas = $_POST['vagas'];
	$id = $_POST['id'];
	$id -= 82789; 

	$edicao = new Curso($curso, $horas, $valor, $descricao, $vagas);
	$banco = new CursoDao();
	
	if($banco->editarCurso($id, $edicao)){
		header('location: ../interno/cursos.php'); // volta para pagina de cadastro (index)	
	}
}

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$id -= 82789;

	$banco = new CursoDao();
	if($banco->apagarCurso($id)){
		header('location: ../interno/cursos.php');		
	}

}

