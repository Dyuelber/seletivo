<?php 
require_once 'Aluno.php';
require_once 'Conexao.php';

class AlunoDao {
	private $con_ativa;

	public function __construct(){
		if(!isset($this->con_ativa)){
			$this->con_ativa = Conexao::getInstancia();
		}
	}

	public function novoAluno($objeto){
		$nome = $objeto->getNome();
		$endereco = $objeto->getEndereco();
		$bairro = $objeto->getBairro();
		$num = $objeto->getNum();
		$rg = $objeto->getRg();
		$cpf = $objeto->getCpf();
		$cidade = $objeto->getCidade();
		$nascimento = $objeto->getNascimento();
		$sexo = $objeto->getSexo();
		$curso = $objeto->getCurso();

		$sql = "INSERT INTO info (nome, endereco, bairro, numero, rg, cpf, cidade, nascimento, sexo, curso) VALUES(:NOME, :ENDERECO, :BAIRRO, :NUMERO, :RG, :CPF, :CIDADE, :NASCIMENTO, :SEXO, :CURSO)";
		try {
			$operacao = $this->con_ativa->prepare($sql);
			
			$operacao->bindParam(":NOME", $nome);
			$operacao->bindParam(":ENDERECO", $endereco);
			$operacao->bindParam(":BAIRRO", $bairro);
			$operacao->bindParam(":NUMERO", $num);
			$operacao->bindParam(":RG", $rg);
			$operacao->bindParam(":CPF", $cpf);
			$operacao->bindParam(":CIDADE", $cidade);
			$operacao->bindParam(":NASCIMENTO", $nascimento);
			$operacao->bindParam(":SEXO", $sexo);
			$operacao->bindParam(":CURSO", $curso);
			
			if($operacao->execute()){
				return true;
			}
			return false;

		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	public function editarAluno($id, $objeto){
		$nome = $objeto->getNome();
		$endereco = $objeto->getEndereco();
		$bairro = $objeto->getBairro();
		$num = $objeto->getNum();
		$rg = $objeto->getRg();
		$cpf = $objeto->getCpf();
		$cidade = $objeto->getCidade();
		$nascimento = $objeto->getNascimento();
		$sexo = $objeto->getSexo();
		$curso = $objeto->getCurso();

		$sql = "UPDATE info SET nome=:NOME, endereco=:ENDERECO, bairro=:BAIRRO, numero=:NUMERO, rg=:RG, cpf=:CPF, cidade=:CIDADE, nascimento=:NASCIMENTO, sexo=:SEXO, curso=:CURSO WHERE id=:ID";
		try {
			$operacao = $this->con_ativa->prepare($sql);

			$operacao->bindParam(":NOME", $nome);
			$operacao->bindParam(":ENDERECO", $endereco);
			$operacao->bindParam(":BAIRRO", $bairro);
			$operacao->bindParam(":NUMERO", $num);
			$operacao->bindParam(":RG", $rg);
			$operacao->bindParam(":CPF", $cpf);
			$operacao->bindParam(":CIDADE", $cidade);
			$operacao->bindParam(":NASCIMENTO", $nascimento);
			$operacao->bindParam(":SEXO", $sexo);
			$operacao->bindParam(":CURSO", $curso);
			$operacao->bindParam(":ID", $id);

			if($operacao->execute()){
				return true;
			}
			return false;
			
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	public  function excluirAluno($id){
		$sql = "DELETE FROM info WHERE id=:ID";
		try {
			$operacao = $this->con_ativa->prepare($sql);
			$operacao->bindParam(":ID", $id);
			
			if($operacao->execute()){
				return true;
			}
			return false;

		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	public function selecionaAluno($id){
		$sql = "SELECT * FROM info WHERE id=:ID";
		try {
			$operacao = $this->con_ativa->prepare($sql);
			$operacao->bindParam(":ID", $id);
			
			if($operacao->execute()){
				return $operacao->fetch();
			}
			return false;

		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	public function exibirAlunos(){
		$sql = "SELECT * FROM info";

		try {
			$operacao = $this->con_ativa->prepare($sql);
			
			if($operacao->execute()){
				return $operacao; // usar fetch depois
			}
		} catch (PDOException $e) {
			$e->getMessage();		
		}
	}
}