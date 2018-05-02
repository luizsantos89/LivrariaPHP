<?php

$opcao = (int) $_REQUEST["opcao"];

if ($opcao==1) {
    $id = (int) $_REQUEST["id"];
    $publicacaoDao = new PublicacaoDao();

    $item = $publicacaoDao->getPublicacao($id);

    session_start();

    $_SESSION['carrinho'] += $item;

    header("Location:../exibirCarrinho.php");
}