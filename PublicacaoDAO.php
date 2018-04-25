<?php

require 'Publicacao.php';

public function getPublicacoes(){
    $rs = $this->con->query("SELECT * FROM publicacao");
    
    $lista = array();
    while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
        $publicacao->setId($row->publicacao_id);
        $publicacao->setIsbn($row->isbn);
        $publicacao->setTitulo($this->getTitulo($row->isbn));
        $publicacao->setAutor($this->getAutor($row->autor_id));
        $publicacao->setEditora($this->getEditora($row-->editora_id));
        $publicacao->setPreco($row->preco);
        $lista[] = $publicacao;
    }
    
    return $lista;
}

private function getEditora($id){
    $sql = $this->con->prepare("SELECT editora_nome FROM editora WHERE editora_id = :id");
    
    $sql->bindValue(':id',$id);
    $sql->execute();
    
    $editora = $sql->fetch(PDO::FETCH_OBJ);
    
    return $editora;
}

public function getPublicacao($id) {
    $sql = $this->con->prepare("SELECT * FROM publicacao WHERE publicacao_id = :id");
    
    $sql->bindValue(':id',$id);
    $sql->execute();
    
    $publicacao = $sql->fetch(PDO::FETCH_OBJ);
    
    return $publicacao;
}

?>