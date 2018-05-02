<?php

require_once('conexao.inc');
require_once('../classes/publicacao.inc');

class PublicacaoDao
{
       private $con;

       function PublicacaoDao()
       {
           $c = new Conexao();
           $this->con = $c->getConexao();
       }

       public function incluirAutor(Autor $autor)
       {
                $sql = $this->con->prepare("insert into autores (nome, email, dt_nasc) values (:nom, :em, :data)");

                $sql->bindValue(':nom', $autor->getNome());
                $sql->bindValue(':em', $autor->getEmail());
                $sql->bindValue(':data', $this->converteDataMysql($autor->getDataNascimento()));
                $sql->execute();
       }

       public function getPublicacoes()
       {
                $rs = $this->con->query("SELECT * FROM publicacao");

                $lista = array();
                while($row = $rs->fetch(PDO::FETCH_OBJ))
                {
                           $publicacao = new Publicacao();
                           $publicacao->setId($row->publicacao_id);
                           $publicacao->setIsbn($row->isbn);
                           $publicacao->setTitulo($this->getTitulo($row->isbn));
                           $publicacao->setAutor($this->getAutor($row->autor_id));
                           $publicacao->setEditora($this->getEditora($row->editora_id));
                           $publicacao->setPreco($row->preco);
                           $lista[] = $publicacao;
                }
                return $lista;
       }
       
       public function getPublicacao($id)
       {
                $sql = $this->con->prepare("SELECT * FROM publicacao where publicacao_id = :id");

                $sql->bindValue(':id', $id);
                $sql->execute();

                $row = $sql->fetch(PDO::FETCH_OBJ);

                $publicacao = new Publicacao();
                $publicacao->setId($row->publicacao_id);
                $publicacao->setIsbn($row->isbn);
                $publicacao->setTitulo($this->getTitulo($row->isbn));
                $publicacao->setAutor($this->getAutor($row->autor_id));
                $publicacao->setEditora($this->getEditora($row->editora_id));
                $publicacao->setPreco($row->preco);


                return $publicacao;
       }

       private function getEditora($id)
       {
                $sql = $this->con->prepare("SELECT editora_nome FROM editora where editora_id = :id");

                $sql->bindValue(':id', $id);
                $sql->execute();

                $editora = $sql->fetch(PDO::FETCH_OBJ);

                return $editora->editora_nome;
       }
       
       private function getAutor($id)
       {
                $sql = $this->con->prepare("SELECT nome FROM autores where autor_id = :id");

                $sql->bindValue(':id', $id);
                $sql->execute();

                $autor = $sql->fetch(PDO::FETCH_OBJ);

                return $autor->nome;
       }
       
       private function getTitulo($isbn)
       {
                $sql = $this->con->prepare("SELECT titulo FROM livros where isbn = :isbn");

                $sql->bindValue(':isbn', $isbn);
                $sql->execute();

                $livro = $sql->fetch(PDO::FETCH_OBJ);

                return $livro->titulo;
       }


       public function getLivro($isbn)
       {
                $sql = $this->con->prepare("SELECT * FROM publicacao where isbn = :isbn");

                $sql->bindValue(':isbn', $isbn);
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
       
       private function getEditora2($isbn)
       {
                $sql = $this->con->prepare("SELECT editora_id FROM publicacao where isbn = :isbn");

                $sql->bindValue(':isbn', $isbn);
                $sql->execute();

                $editora = $sql->fetch(PDO::FETCH_OBJ);

                $sql = $this->con->prepare("SELECT editora_nome FROM editora where editora_id = :id");

                $sql->bindValue(':id', $editora->editora_id);
                $sql->execute();

                $editora = $sql->fetch(PDO::FETCH_OBJ);

                return $editora->editora_nome;
       }

}

?>

