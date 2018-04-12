<HTML>
<HEAD>
 <TITLE>Formulário de Autor</TITLE>
</HEAD>
<BODY>
<form action="controlerAutor.php" method="POST">
	<div>
    	<div>
			<div>
			    <label>Nome:</label>
			        <div>
			    		<input type="text" value="Digite aqui o nome" name="nome">
			  		</div>
			</div>
			<div>
			    <label>Email:</label>
			        <div>
			    		<input type="text" value="Digite aqui o email" name="email">
			  		</div>
			</div>
			<div>
			    <label>Data de nascimento:</label>
			        <div>
			    		<input type="text" value="00/00/00" name="data">
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