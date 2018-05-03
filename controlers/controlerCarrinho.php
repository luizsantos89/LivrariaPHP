<?php
require_once('../dao/publicacaoDao.inc');

$opcao = (int) $_REQUEST["opcao"];

if ($opcao==1) {
    $id = (int) $_REQUEST["id"];
    
    $publicacaoDao = new PublicacaoDao();

    $item = $publicacaoDao->getPublicacao($id);

    session_start();

    $_SESSION['carrinho'] = $item;

    header("Location:controlerCarrinho.php?opcao=2");
}

if($opcao == 2) {
    echo 'Mostra o carrinho (Em desenvolvimento)';
}