<?php 
require_once 'model/CursoDao.php';

function buscar(){
	$lista = new CursoDao();

	$cursos = $lista->exibirCursos();
	if($cursos != null){
		return $cursos;
	}
	return false;
}

