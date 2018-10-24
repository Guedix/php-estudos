<?php
      
       $nome = null; //somente vai ser null, se atribuir o valor null para ele!
       $endereço = "";

?>

<!DOCTYPE html>
<html>
       
       <head>
           <meta charset="UTF-8">
           <title>Strings</title>

       </head>

       <body>
             
                <?php 
                 
                echo "Está variavél é null?" . is_null($nome) . "</br>";
                echo "Está variavél é null?" . is_null($endereço);

                ?>
                
       </body>
</html>