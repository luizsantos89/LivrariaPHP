<?php

class Autor 
{    
    private $autor_id;
    private $nome;
    private $email;
    private $data_nascimento;
    
    
    
    public function setAutor($id,$nome,$email,$data) {
        $this->autor_id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->data_nascimento = strtotime($data);
    }
    
    
    public function Autor($nome,$email,$data) {
        $this->nome = $nome;
        $this->email = $email;
        $this->data_nascimento = strtotime(str_replace('/','-',$data));
   
    }   
    
    
    public function getAutor_id() {
        return $this->autor_id;
    }
    
    public function setAutor_id($pId) {
        return $this->autor_id=$pId;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($pNome){
        return $this->nome=$pNome;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($pEmail){
        return $this->email=$pEmail;
    }
    
    public function getDataNascimento(){
        return $this->data_nascimento;
    }
    
    public function setDataNascimento($pDataNascimento){
        return $this->data_nascimento=$pDataNascimento;
    }
    
}

?>