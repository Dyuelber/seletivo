<?php

class Conexao {

	private static $instancia;

	public static function getInstancia(){
		if (!isset($instancia)) {
			
			try{
				$banco_host = "mysql:dbname=school;host=localhost";
 				$usuario = "root";
	 			$senha = "";

				$instancia = new PDO($banco_host, $usuario, $senha);
				$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // gerando uma execao
			
			} catch(PDOException $execao){
				echo $execao->getMessage(); 
				exit();
			}
			return $instancia;
		}
	} 
}
