<HTML>
<HEAD>
 <TITLE>Formulário de Livro</TITLE>
</HEAD>
<BODY>
<?php
	session_start();

	$livro = $_SESSION['livro'];

?>

<form action="controlers/controlerLivro.php?opcao=5" method="POST">
	<div>
            <div>
                <label>Isbn:</label>
                <div>
                    <input type="text" name="pIsbn" value="<?php echo $livro->isbn ?>">
                </div>
            </div>
            <div>
                <label>Título:</label>
                <div>
                    <input type="text" name="pTitulo" value="<?php echo $livro->titulo ?>">
                </div>
            </div>
            <div>
                <label>Número da edição:</label>
                <div>
                    <input type="text" name="pEdicao_num" value="<?php echo $livro->edicao_num ?>">
                </div>
            </div>
            <div>
                <label>Ano da publicação:</label>
                    <div>
                            <input type="text" name="pAno_publicacao" value="<?php echo $livro->ano_publicacao ?>">
                            </div>
            </div>
            <div>
                <label>Descrição:</label>
                    <div>
                            <input type="text" name="pDescricao" value="<?php echo $livro->descricao ?>">
                            </div>
            </div>
            <div>
                <label>Preço:</label>
                    <div>
                            <input type="text" name="pPreco" value="<?php echo $livro->preco ?>">
                            </div>
            </div>
                <input type="hidden" name="p.Opcao" value="1">
            <div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            </div>
	</div>
</form>
</BODY>
</HTML>