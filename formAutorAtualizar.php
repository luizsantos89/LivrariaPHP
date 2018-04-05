<html>
    <head>
        <title>Atualização de Autores</title>
    </head>
    <body>
    <center>
        <?php
            function formatarData($data){
                return date('d/m/Y',$data);
            }
            
            session_start();
            $autor = $_SESSION['autor'];
        ?>
        
        <h2>Alteração de Autores</h2>
        
        
        <form action="controlerAutor.php?opcao=5" method="post">
            <p>
                ID: 
                <input type="text" size="3" name="pld" value="<?php echo $autor->autor_id?>" readonly>
            </p>
            <p>
                Nome do Autor: 
                <input type="text" size="50" name="pNome" value="<?php echo $autor->nome?>"
            </p>
            <p>
                E-mail de contato:
                <input type="text" size="30" name="pEmail" value="<?php echo $autor->email?>"/>
            </p>
            <p>
                Data de Nascimento:
                <input type="text" size="15" name="pDataNasc" value="<?php echo formatarData(strotime($autor->dt_nasc))?>">
            </p>
        </form>
        </p>
    </center>
    </body>
</html>
