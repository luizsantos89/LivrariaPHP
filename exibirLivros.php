<html>
<head>
	<title>Exibição de Livros</title>
</head>
<body>
	<center><h1>Livros cadastrados</h1>
	<p>

<?php
	
	//function formatarData($data){
	//	return date('d/m/Y',$data);
	//}

	session_start();

	$livros = $_SESSION['livros'];

?>

	<font face="Tahoma">
	<table border="0" cellspacing="2" cellspadding="1" width="50%">
		
<?php
	foreach ($livros as $livro) {
?>
		<tr><!-- linha-->
                    <td>
                        <img src="imagens/book_<?=$livro->isbn?>.jpg" width="150px">
                    </td>
                    <td>
                        <table border="0">
                            <tr>
                                <td> 
                                    <?=$livro->titulo; ?>  
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Autor: 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Editora:
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Valor: R$ <?=$livro->preco ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href='controlerLivro.php?opcao=3&isbn=<?= $livro->isbn ?>'>Alterar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="controlerLivro.php?opcao=4&isbn=<?= $livro->isbn ?>">Excluir</a>
                                </td>
                            </tr>
                        </table>
                    </td>
		</tr>
<?php

		/*
		echo "<tr align='center'>";
		echo "<td> ";
		echo "<td>".$livro->titulo."</td>";
	//	echo "<td>".$livro->editora."</td>";
		echo "<td>".$livro->preco."</td>";
		echo "</tr>";
		*/
	}
?>
	</font>
	</table>
	</center>
</body>
</html>