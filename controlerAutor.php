<?php

require_once('modeloLivraria.inc');
require_once('autorDao.php');
$opcao = (int)$_REQUEST['opcao'];

if($opcao == 1) {
    $autor = new Autor($_POST['nome'], $_POST['email'], $_POST['data_nascimento']);
    $autorDao = new AutorDAO();
    
    $autorDao->incluirAutor($autor);
    
    header("Location:exibirAutores.php");    
}

if($opcao == 2) {
    $autorDao = new AutorDAO();
    $lista = $autorDao->getAutores();
    session_start();
    $_SESSION["autores"]=$lista;
    header("Location:exibirAutores.php");
}

if($opcao == 3) {
    $id = (int) $_REQUEST["id"];
    
    $autorDao = new AutorDAO();
    
    $autor = $autorDao->getAutor($id);
    
    session_start();
    $_SESSION['autor'] = $autor;
    
    header("Location:formAutorAtualizar.php");
}

if ($opcao == 4) {
    $id = (int) $_REQUEST["id"];
    
    $autorDao = new AutorDAO();
    $autorDao->excluirAutor($id);
    
    header("Location:controlerAutor.php?opcao=2");
}

if ($opcao == 5) {
    $autor = new Autor($_POST['pNome'],$_POST['pEmail'],$_POST['pDataNasc']);
    
    $autorDao = new AutorDAO();
    
    $autorDao->atualizarAutor($autor);
    
    header("Location:controlerAutor.php?opcao=2");
}