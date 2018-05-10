<?php
require_once('../dao/publicacaoDao.inc');

$opcao = (int) $_REQUEST["opcao"];

if ($opcao==1) {
    $id = (int)$_REQUEST['id'];
    $publicacaoDao = new PublicacaoDao();
    $publicacao = $publicacaoDao->getPublicacao($id);

    session_start();
    if (!isset($_SESSION['carrinho'])) {
       $carrinho = array();
    } else {
        $carrinho = $_SESSION['carrinho'];
        $carrinho[] = $publicacao;
        $_SESSION['carrinho'] = $carrinho;
        header("Location:../exibirCarrinho.php");
    }
}

if ($opcao == 2) {
    $index= (int)$_REQUEST['index'];
    session_start();
    $carrinho = $_SESSION['carrinho'];
    unset($carrinho[$index]);
    $_SESSION['carrinho'] = $carrinho;
    header("Location:controlerCarrinho.php?opcao=3");
}
    
if ($opcao == 3){
    session_start();
    if ((!isset($_SESSION['carrinho']) || sizeof($_SESSION['carrinho'])==0)){
       header("Location:../exibirCarrinho.php?status=1");
    } else {
        header("Location:../exibirCarrinho.php");
    }
}
    