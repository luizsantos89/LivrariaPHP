<?php
	require_once('conexao.inc');
	require_once('LivroDAO.php');
	require_once('modeloLivraria.inc');

	$opcao = (int)$_REQUEST['opcao'];

	if($opcao==1){
		$livro = new Livro($_POST['isbn'], $_POST['titulo'], $_POST['edicao_num'], $_POST['ano_publicacao'], $_POST['descricao'], $_POST['preco']);

		$LivroDAO = new LivroDAO();

		$LivroDAO->incluirLivro($livro);

		header('Location:controlerLivro.php?opcao=2');
	}
	if($opcao==2){
		$livroDao = new LivroDAO();

		$lista = $livroDao->getLivros();

		session_start();

		$_SESSION['livros'] = $lista;

		header('Location:exibirLivros.php');
	}
	if($opcao==3){
		$isbn = $_REQUEST['id'];

		$livroDao = new LivroDAO();

		$livro = $livroDao->getLivro($isbn);


		session_start();


		echo $livro->isbn;

		$_SESSION['livro'] = $livro;

		header("Location:formLivroAtualizar.php");
	}
        

	if($opcao==4){
		$isbn = $_REQUEST['isbn'];

		$livroDAO = new LivroDAO();

		$livroDAO->excluirLivro($isbn);

		header("Location:controlerLivro.php?opcao=2");
	}

?>