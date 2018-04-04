<?php



if ($opcao == 4) {
    $id = (int) $_REQUEST["id"];
    
    $autorDao = new AutorDAO();
    $autorDao->excluirAutor($id);
    
    header("Location:controlerAutor.php?opcao=2");
}