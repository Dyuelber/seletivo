<?php 
/* */

class Curso {
	private $curso, $descricao;
	private $horas, $valor, $vagas;
	
	public function __construct($curso, $horas, $valor, $descricao, $vagas){
		$this->curso = $curso;
		$this->horas = $horas;
		$this->valor = $valor;
		$this->descricao = $descricao;
		$this->vagas = $vagas;
	}

	public function getCurso(){
		return $this->curso;
	}
	public function setCurso($curso){
		$this->curso = $curso;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	public function getHoras(){
		return $this->horas;
	}
	public function setHoras($horas){
		$this->horas = $horas;
	}
	public function getValor(){
		return $this->valor;
	}
	public function setValor($valor){
		$this->valor = $valor;
	}
	public function getVagas(){
		return $this->vagas;
	}
	public function setVagas($vagas){
		$this->vagas = $vagas;
	}
}
