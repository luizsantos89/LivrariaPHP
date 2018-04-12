<HTML>
<HEAD>
 <TITLE>Formulário de Autor</TITLE>
</HEAD>
<BODY>
<?php
	
	function formatarData($data){
		return date('d/m/Y',$data);
	}

	session_start();

	$autor = $_SESSION['autor'];

?>


<form action="controlerAutor.php?opcao=5" method="POST">
	<div>
    	<div>
    		<div>
			    <label>ID:</label>
			        <div>
			    		<input type="text" name="pId" value="<?php echo $autor->autor_id ?>" readonly>
			  		</div>
			</div>
			<div>
			    <label>Nome:</label>
			        <div>
			    		<input type="text" name="pNome" value="<?php echo $autor->nome ?>">
			  		</div>
			</div>
			<div>
			    <label>Email:</label>
			        <div>
			    		<input type="text" name="pEmail" value="<?php echo $autor->email ?>">
			  		</div>
			</div>
			<div>
			    <label>Data de nascimento:</label>
			        <div>
			    		<input type="text" name="pDataNasc" value="<?php echo formatarData(strtotime($autor->dt_nasc)) ?>">
			  		</div>
			</div>
			<input type="hidden" name="opcao" value="5">
		    <div>
		        <button type="submit" class="btn btn-primary" value="Atualizar">Atualizar</button>
		    </div>
		</div>
	</div>
</form>
</BODY>
</HTML>