<?php
	require_once('conexao.inc');
	require_once('AutorDAO.php');

	require_once('modeloLivraria.inc');

	$opcao = (int)$_REQUEST['opcao'];

	if($opcao == 1){

		$autor = new Autor($_POST["nome"],$_POST["email"],$_POST["data"]);

		$AutorDAO = new AutorDAO();

		$AutorDAO->incluirAutor($autor);

		 header("Location:controlerAutor.php?opcao=2");
	}
	if($opcao==2){
		
		$autorDao = new AutorDAO();

		$lista = $autorDao->getAutores();

		session_start();

		$_SESSION['autores'] = $lista;

		header("Location:../exibirAutores.php");

	}
	if($opcao == 3){
		$id = (int)$_REQUEST['id'];

		$autorDao = new AutorDAO();

		$autor = $autorDao->getAutor($id);

		session_start();
		$_SESSION['autor'] = $autor;

		header("Location:../formAutorAtualizar.php");

	}

	if($opcao==4){
		$id = (int)$_REQUEST['id'];

		$autorDao = new AutorDAO();

		$autorDao->excluirAutor($id);

		header("Location:controlerAutor.php?opcao=2");
	}
	if($opcao==5){
		$autor = new Autor($_POST["pNome"],$_POST["pEmail"],$_POST["pDataNasc"]);
		$autor->setAutor_id($_POST['pId']);

		$AutorDAO = new AutorDAO();

		$AutorDAO->atualizarAutor($autor);

		 header("Location:controlerAutor.php?opcao=2");
	}
?>