<?php

require ('conexao.inc');
require ('../classes/modeloLivraria.inc');

class AutorDao
{
       private $con;
       public $porPagina;
       
       function AutorDao()
       {
           $c = new Conexao();
           $this->con = $c->getConexao();
           $this->porPagina = 10;
       }
       
       public function incluirAutor(Autor $autor)
       {
                $sql = $this->con->prepare("insert into autores (nome, email, dt_nasc) values (:nom, :em, :data)");
                $sql->bindValue(':nom', $autor->getNome());
                $sql->bindValue(':em', $autor->getEmail());
                $sql->bindValue(':data', $this->converteDataMysql($autor->getDataNascimento()));
                $sql->execute();
       }
       
       public function incluirVariosAutores()
       {
            for($i=1;$i<=100;$i++)
            {
                $sql = $this->con->prepare("insert into autores (nome, email, dt_nasc) values (:nom, :em, :data)");

                $sql->bindValue(':nom', 'nome '.$i);
                $sql->bindValue(':em', 'email'.$i.'@dominio.com.br');
                $sql->bindValue(':data', '2100-12-31');
                $sql->execute();
            }
       }

       public function getAutores()
       {
                $rs = $this->con->query("SELECT * FROM autores");

                $lista = array();
                while($row = $rs->fetch(PDO::FETCH_OBJ))
                {
                           $lista[] = $row;
                }
                return $lista;
       }

       public function getAutoresPaginacao($pagina)
       {
            $init = ($pagina - 1) * $this->porPagina;
            
            $result = $this->con->query("SELECT * FROM autores LIMIT $init, $this->porPagina");
            
            $lista = array();
            
            while($row = $result->fetch(PDO::FETCH_OBJ)) {
                $lista[]=$row;
            }
            
            return $lista;
       }
       
       public function getPagina()
       {
              $result_total = $this->con->query("SELECT count(*) as total FROM autores")->fetch(PDO::FETCH_OBJ);

              $num_paginas = ceil( $result_total->total / $this->porPagina);

              return $num_paginas;
       
       }

       public function excluirAutor($id)
       {
                $sql = $this->con->prepare("delete from autores where autor_id = :id");

                $sql->bindValue(':id', $id);
                $sql->execute();
       }
       
       public function getAutor($id)
       {
                $sql = $this->con->prepare("SELECT * FROM autores where autor_id = :id");

                $sql->bindValue(':id', $id);
                $sql->execute();
                
                return $sql->fetch(PDO::FETCH_OBJ);
       }
       
       public function atualizarAutor(Autor $autor)
       {
            $sql = $this->con->prepare("update autores set nome= :nom, email= :em, dt_nasc= :data where autor_id= :id");
            $sql->bindValue(':nom', $autor->getNome());
            $sql->bindValue(':em', $autor->getEmail());
            $sql->bindValue(':data', $this->converteDataMysql($autor->getDataNascimento()));
            $sql->bindValue(':id', $autor->getAutor_id());
            $sql->execute();
       }


       function converteDataMysql($data)
       {
            return date('Y-m-d',$data);
       }
       

}

?>

