<?php

    require_once('../modeloLivraria.inc');
    require_once('../dao/publicacaoDao.inc');

    $opcao = (int)$_REQUEST['opcao'];

    if($opcao == 2){
        $publicacaoDao = new PublicacaoDao();

        $lista = $publicacaoDao->getPublicacoes();

        session_start();

        $_SESSION['publicacoes'] = $lista;

        header("Location:../exibirPublicacoes.php");
    }  
?>
