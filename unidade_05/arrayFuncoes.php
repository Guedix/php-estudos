<?php
      
      $lost = array(23,15,16,8,42,4); 

?>

<!DOCTYPE html>
<html>
       
       <head>
           <meta charset="UTF-8">
           <title>Strings</title>

       </head>

       <body>

            <?php 
            
            echo max($lost) . "</br>";
            echo min($lost) . "</br>";
            echo array_sum($lost) . "</br>"; //soma de todos os valores

            sort($lost); //vizualizar em ordem crescente ''rsort'' mostra forma decrescente//
            
            ?>

            <pre>
                <?php
                  print_r($lost);
                ?>
            </pre>

       </body>
</html>