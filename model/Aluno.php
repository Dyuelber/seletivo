<?php
//  nome, endereco, bairro, nº, rg, cpf, cidade, nascimento, sexo, curso
class Aluno {	
	private $nome, $endereco, $bairro, $num, $rg;
	private $cpf, $cidade, $nascimento, $curso, $sexo;

	public function __construct($nome, $endereco, $bairro, $num, $rg, $cpf, $cidade, $nascimento, $sexo, $curso){
		$this->nome = $nome;
		$this->endereco = $endereco;
		$this->bairro = $bairro;
		$this->num = $num;
		$this->rg = $rg;
		$this->cpf = $cpf;
		$this->cidade = $cidade;
		$this->nascimento = $nascimento;
		$this->sexo = $sexo;
		$this->curso = $curso;
	}

	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getEndereco(){
		return $this->endereco;
	}
	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	public function getBairro(){
		return $this->bairro;
	}
	public function setBairro($bairro){
		$this->bairro = $bairro;
	}
	public function getNum(){
		return $this->num;
	}
	public function setNum($num){
		$this->num = $num;
	}
	public function getRg(){
		return $this->rg;
	}
	public function setRg($rg){
		$this->rg = $rg;
	}
	public function getCpf(){
		return $this->cpf;
	}
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
	public function getCidade(){
		return $this->cidade;
	}
	public function setCidade($cidade){
		$this->cidade = $cidade;
	}
	public function getNascimento(){
		return $this->nascimento;
	}
	public function setNascimento($nascimento){
		$this->nascimento = $nascimento;
	}
	public function getCurso(){
		return $this->curso;
	}
	public function setCurso($curso){
		$this->curso = $curso;
	}
	public function getSexo(){
		return $this->sexo;
	}
	public function setSexo($sexo){
		$this->sexo = $sexo;
	}
}
