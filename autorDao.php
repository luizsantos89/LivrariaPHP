<?php

	require_once('conexao.inc');
	require_once('modeloLivraria.inc');

	class AutorDAO{
		private $con;

		function AutorDao(){
			$c = new Conexao();
			$this->con = $c->getConexao();
		}

		public function incluirAutor(Autor $autor){
			$sql = $this->con->prepare("insert into autores (nome, email, dt_nasc) values (:nom, :em, :data)");

			$sql->bindValue(':nom', $autor->getNome());
			$sql->bindValue(':em', $autor->getEmail());
			$sql->bindValue(':data', $this->converteDataMysql($autor->getDataNascimento()));			
			$sql->execute();
		}

		function converteDataMysql($data){
			return date('Y-m-d', $data);
		}

		public function getAutores(){
			$rs = $this->con->query("SELECT * FROM autores");

			$lista = array();
			while($autor=$rs->fetch(PDO::FETCH_OBJ)){
				$lista[] = $autor;
			}

			return $lista;
		}

		public function excluirAutor($id){

			$sql=$this->con->prepare("delete from autores where autor_id= :id");

			$sql->bindValue(':id', $id);
			$sql->execute();
		}

		public function getAutor($id){
			$sql = $this->con->prepare("SELECT * FROM autores where autor_id = :id");
			$sql->bindValue(':id', $id);
			$sql->execute();

			return $sql->fetch(PDO::FETCH_OBJ); // retorna o registro da tabela no formato do objeto Autor capturado

		}

		public function atualizarAutor(Autor $autor){
			$sql = $this->con->prepare("update autores set nome=:nom, email= :em, dt_nasc= :data where autor_id=:id");

			$sql->bindValue(':nom', $autor->getNome());
			$sql->bindValue(':em', $autor->getEmail());
			$sql->bindValue(':data', $this->converteDataMysql($autor->getDataNascimento()));
			$sql->bindValue(':id', $autor->getAutor_id());

			$sql->execute();
		}

	}

?>