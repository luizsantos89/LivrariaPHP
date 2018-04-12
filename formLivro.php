<HTML>
<HEAD>
 <TITLE>Formulário de Livro</TITLE>
</HEAD>
<BODY>
<form action="controlerLivro.php" method="POST">
	<div>
    	<div>
			<div>
			    <label>Isbn:</label>
			        <div>
			    		<input type="text" name="isbn">
			  		</div>
			</div>
			<div>
			    <label>Título:</label>
			        <div>
			    		<input type="text" name="titulo">
			  		</div>
			</div>
			<div>
			    <label>Número da edição:</label>
			        <div>
			    		<input type="text" name="edicao_num">
			  		</div>
			</div>
			<div>
			    <label>Ano da publicação:</label>
			        <div>
			    		<input type="text" name="ano_publicacao">
			  		</div>
			</div>
			<div>
			    <label>Descrição:</label>
			        <div>
			    		<input type="text" name="descricao">
			  		</div>
			</div>
			<div>
			    <label>Preço:</label>
			        <div>
			    		<input type="text" name="preco">
			  		</div>
			</div>
			<input type="hidden" name="opcao" value="1">
		    <div>
		        <button type="submit" class="btn btn-primary">Enviar</button>
		    </div>
		</div>
	</div>
</form>
</BODY>
</HTML>