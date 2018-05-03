<?php
     header('Content-Type: text/html; charset=utf-8');
     require_once('classes/modeloLivraria.inc');
?>
<HTML>
<HEAD>
 <TITLE>Publicações</TITLE>
 </HEAD>
<BODY>
      <center>
        <h1>Meu carrinho</h1>
      <p>
      <div align="right">
          <a href="controlerCarrinho.php?opcao=3"><img src="../imagens/meu-carrinho.png" border="0"></a>
      </div>
<?php

      session_start();
      
      $carrinho = $_SESSION['carrinho'];
         
          ?>
      <table>
          <tr>
              <th>ISBN: </th>
              <td><?php echo $carrinho->getIsbn(); ?></td>
          </tr>
          <tr>
              <th>Título: </th>
              <td><?php echo $carrinho->getTitulo(); ?></td>
          </tr>
          <tr>
              <th>Autor: </th>
              <td><?php echo $carrinho->getAutor(); ?></td>
          </tr>
          <tr>
              <th>Valor: </th>
              <td><?php echo $carrinho->getPreco(); ?></td>
          </tr>
      </table>
        </center>
</BODY>
</HTML>
