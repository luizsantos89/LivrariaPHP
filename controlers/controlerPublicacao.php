<?php

    require_once('../classes/modeloLivraria.inc');
    require_once('../dao/publicacaoDao.inc');

    $opcao = (int)$_REQUEST['opcao'];
    
    if ($opcao == 1){
        $publicacaoDao = new PublicacaoDao();
        $lista = $publicacaoDao->getPublicacoes();
        session_start();
        $_SESSION['publicacoes'] = $lista;
        header("Location:mostruarioLivros.php");
    }

    if ($opcao==3) {
        $id = $_REQUEST['id'];
        $publicacaoDao = new PublicacaoDao();
        $publicacao = $publicacaoDao->getPublicacao($id);

        session_start();
        $_SESSION['publicacao'] = $publicacao;
        header('Location:atualizaLivro.php');
    }
    

    if($opcao == 2){
        $publicacaoDao = new PublicacaoDao();

        $lista = $publicacaoDao->getPublicacoes();

        session_start();

        $_SESSION['publicacoes'] = $lista;

        header("Location:../exibirPublicacoes.php");
    }  
?>
