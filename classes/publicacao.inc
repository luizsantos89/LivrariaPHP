<?php


class Publicacao
{
      public $pub_id;
      public $isbn;
      public $titulo;
      public $autor;
      public $editora;
      public $preco;

      function Publicacao()
      {

      }
      
      public function setId($pub_id)
      {
            $this->pub_id = $pub_id;
      }

      public function setIsbn($isbn)
      {
            $this->isbn = $isbn;
      }
      
      public function setTitulo($titulo)
      {
            $this->titulo = $titulo;
      }

      public function setAutor($autor)
      {
            $this->autor = $autor;
      }

      public function setEditora($editora)
      {
            $this->editora = $editora;
      }
      
      public function setPreco($preco)
      {
            $this->preco = $preco;
      }
      
      public function getId()
      {
            return $this->pub_id;
      }

      public function getIsbn()
      {
            return $this->isbn;
      }
      
      public function getTitulo()
      {
            return $this->titulo;
      }

      public function getAutor()
      {
            return $this->autor;
      }

      public function getEditora()
      {
            return $this->editora;
      }

      public function getPreco()
      {
            return $this->preco;
      }


}

?>
