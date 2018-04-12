<html>
<head>
<title>Exibição de Autores</title>
</head>
<body>
	<center><h1>Autores cadastrados</h1>
	<p>

<?php
	
	function formatarData($data){
		return date('d/m/Y',$data);
	}

	session_start();

	$autores = $_SESSION['autores'];

?>

	<font face="Tahoma">
	<table border="1" cellspacing="2" cellspadding="1" width="50%">
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Data de nascimento</th>
			<th>Operação</th>
		</tr>
<?php
	foreach ($autores as $autor) {
		echo "<tr align='center'>";
		echo "<td>".$autor->autor_id."</td>";
		echo "<td>".$autor->nome."</td>";
		echo "<td>".$autor->email."</td>";
		echo "<td>".formatarData(strtotime($autor->dt_nasc))."</td>";
		echo "<td><a href='controlerAutor.php?opcao=3&id=".$autor->autor_id. "'>Alterar</a>&nbsp;";
		echo "<a href='controlerAutor.php?opcao=4&id=".$autor->autor_id."'>Excluir</a></td>";
		echo "</tr>";
	}
?>
	</font>
	</table>
	</center>
</body>
</html>