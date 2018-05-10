<?php

class Autor{
      public $autor_id;
      public $nome;
      public $email;
      public $data_nascimento;

      public function setAutor($id,$nome,$email,$data)
      {
               $this->autor_id = $id;
               $this->nome = $nome;
               $this->email = $email;
               $this->data_nascimento = strtotime($data);
      }
      
      function Autor($nome,$email,$data)
      {
               $this->nome = $nome;
               $this->email = $email;
               $this->data_nascimento = strtotime(str_replace('/','-',$data));
      }

      public function getAutor_id()
      {
             return $this->autor_id;
      }
      
      public function setAutor_id($pId)
      {
             return $this->autor_id = $pId;
      }

      public function getNome()
      {
             return $this->nome;
      }

      public function setNome($pNome)
      {
             return $this->nome = $pNome;
      }

      public function getEmail()
      {
             return $this->email;
      }

      public function setEmail($pEmail)
      {
             return $this->email = $pEmail;
      }

      public function getDataNascimento()
      {
             return $this->data_nascimento;
      }

      public function setDataNascimento($pData)
      {
             return $this->data_nascimento = strtotime($pData);
      }

}

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
