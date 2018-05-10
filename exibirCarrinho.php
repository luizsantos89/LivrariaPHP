<HTML>
<HEAD>
 <TITLE>Meu carrinho</TITLE>
</HEAD>
<BODY>
<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
    require './classes/modeloLivraria.inc';
    header("Content-Type: text/html;  charset=ISO-8859-1",true);
    session_start();
    $carrinho = $_SESSION['carrinho'];
    $cont = 1;
    $soma = 0;
?>
<div class="panel panel-default" style="margin:50px;">
        <div class="panel-heading">
            <center><h3 class="panel-title">Meu Carrinho</h3>
            </center>
            <br><br>
        </div>
    <div class="panel-body">
<div class="container">
<center>
<?php
     if(isset($_REQUEST['status']))
     {
      echo"<p><font face='Verdana' size='3' color='red'>Nenhum item foi incluido no carrinho de compras</font></p>";
      echo"<p><a href='controlers/controlerPublicacao.php?opcao=1'>Visualizar publicações</a>";
     }
     else
     {
?>
     <table border="1" class="table">
            <thead>
                <tr>
                    <th>Quantidade</th>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Editora</th>
                    <th>Pre�o</th>
                </tr>
            </thead>
            <tbody>
<?php
     foreach($carrinho as $item)
     {
?>
     <tr bgcolor="<?php echo $color; ?>" align="center">
     <td><?php echo $cont; ?></td>
     <td><?php echo $item->getId(); ?></td>
     <td><?php echo $item->getTitulo(); ?></td>
     <td><?php echo $item->getEditora(); ?></td>
     <td><?php echo "R$ ".$item->getPreco(); ?></td>
     <td><a href="controlerCarrinho.php?opcao=2&index=<?php echo $cont-1?>">Remover Item </a></td>
     </tr>
<?php
     $soma += $item->getPreco();
     $cont++;
     }
?>
     <tr align="right">
     <td colspan="5"><font face="Verdana" size="4" color="red">
     <b>Valor Total = R$<?php echo $soma?></b></font>
     </td></tr>
</tbody>
</table>
<a href="controlerPublicacao.php?opcao=1"><img src="imagens/botao_continuar_comprando.png"></a>
<a href="finalizarCompra.php?total=<?php echo $soma ?>">
     <img src="imagens/finalizarCompra.png"></a>
</center>
</div>
</div>
<?php
}
?>
</BODY>
</HTML>
