<?php 
/**/
require_once 'Curso.php';
require_once 'Conexao.php';

class CursoDao {
	private $con_ativa;

	public function __construct(){
		if (!isset($this->con_ativa)) {
			$this->con_ativa = Conexao::getInstancia();		
		}
	}

	public function criarCurso($objeto){
		$curso = $objeto->getCurso();
		$horas = $objeto->getHoras();
		$valor = $objeto->getValor();
		$desc = $objeto->getDescricao();
		$vagas = $objeto->getVagas();

		$sql = "INSERT INTO cursos (curso, horas, valor, descricao, vagas) VALUES(:CURSO, :HORAS, :VALOR, :DESCRICAO, :VAGAS)";
		try {
			$operacao = $this->con_ativa->prepare($sql);
			$operacao->bindParam(":CURSO", $curso);
			$operacao->bindParam(":HORAS", $horas);
			$operacao->bindParam(":VALOR", $valor);
			$operacao->bindParam(":DESCRICAO", $desc);
			$operacao->bindParam(":VAGAS", $vagas);
			
			if($operacao->execute()){
				return true;
			}
			return false;

		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	public function editarCurso($id, $objeto){
		$curso = $objeto->getCurso();
		$horas = $objeto->getHoras();
		$valor = $objeto->getValor();
		$desc = $objeto->getDescricao();
		$vagas = $objeto->getVagas();

		$sql = "UPDATE cursos SET curso=:CURSO, horas=:HORAS, valor=:VALOR, descricao=:DESCRICAO, vagas=:VAGAS WHERE id=:ID";
		try {
			$operacao = $this->con_ativa->prepare($sql);

			$operacao->bindParam(":CURSO", $curso);
			$operacao->bindParam(":HORAS", $horas);
			$operacao->bindParam(":VALOR", $valor);
			$operacao->bindParam(":DESCRICAO", $desc);
			$operacao->bindParam(":VAGAS", $vagas);
			$operacao->bindParam(":ID", $id);

			if($operacao->execute()){
				return true;
			}
			return false;

		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	public function apagarCurso($id){
		$sql = "DELETE FROM cursos WHERE id=:ID";

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

	public function selecionaCurso($id){
		$sql = "SELECT * FROM cursos WHERE id=:ID";

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

	public function exibirCursos(){
		$sql = "SELECT * FROM cursos";

		try {
			$operacao = $this->con_ativa->prepare($sql);
			
			if($operacao->execute()){
				return $operacao; // usar fetch depois
			}
		} catch (PDOException $e) {
			$e->getMessage();		
		}
	}

	public function nomeCurso(){
		$sql = "SELECT curso FROM cursos WHERE vagas > 0";
		try {
			$operacao = $this->con_ativa->prepare($sql);

			if($operacao->execute()){
				return $operacao;
			}
			return false;

		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	public function diminuirvagas($nome){
		$id = $this->selecionaCursoNome($nome);
		$idCurso = $id['id'];
		$vaga = $this->vagasAbertas($idCurso);
		$vagaCurso = $vaga['vagas'];
		$vagaCurso -= 1;

		$sql = "UPDATE cursos SET vagas=:VAGAS WHERE id=:ID AND vagas > 0";
		try {
			$operacao = $this->con_ativa->prepare($sql);
			$operacao->bindParam(":ID", $idCurso);
			$operacao->bindParam(":VAGAS", $vagaCurso);

			if($operacao->execute()){
				return true;
			}
			return false;

		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	public function selecionaCursoNome($nome){
		$sql = "SELECT id FROM cursos WHERE curso=:NOME";

		try {
			$operacao = $this->con_ativa->prepare($sql);
			$operacao->bindParam(":NOME", $nome);
			
			if($operacao->execute()){
				return $operacao->fetch();
			}
			return false;

		} catch (PDOException $e) {
			$e->getMessage();	
		}
	}

	public function vagasAbertas($id){
		$sql = "SELECT vagas FROM cursos WHERE id=:ID";
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

}