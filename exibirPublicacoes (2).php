<?php
     header('Content-Type: text/html; charset=ISO-8859-1');
     //require_once('autenticar.inc');
     require_once('classes/modeloLivraria.inc');
?>
<HTML>
<HEAD>
 <TITLE>Publicações</TITLE>
 </HEAD>
<BODY>
      <center>
        <h1>Publicações cadastrados</h1>
      <p>
      <div align="right">
          <a href="controlers/controlerCarrinho.php?opcao=3"><img src="imagens/meu-carrinho.png" border="0"></a>
      </div>
<?php

      session_start();
      
      $publicacoes = $_SESSION['publicacoes'];

          foreach($publicacoes as $pub)
          {
?>
               <table border="0" width="50%" cellspacing="5">
               <tr>
                 <td rowspan="5" align="center"><img src="../imagens/book_<?php echo $pub->getIsbn(); ?>.jpg" width="200" height="200" border="0"></td>
               </tr>
               <tr align="left">
                 <td><b><font face="Verdana" size="3"><?php echo $pub->getTitulo(); ?></font></b></td>
               </tr>
               <tr>
                  <td><font face="Verdana" size="3"><?php echo $pub->getAutor(); ?></font></td>
               </tr>
               <tr>
                   <td><font face="Verdana" size="2"><?php echo $pub->getEditora(); ?></font></td>
               </tr>
               <tr>
                   <td><b><font face="Verdana" size="5" color="red">R$ <?php echo $pub->getPreco(); ?></font></b></td>
               </table>
               <p>
               <hr width="50%">
               <p>
          <?php
          }
          ?>
        </center>
</BODY>
</HTML>
