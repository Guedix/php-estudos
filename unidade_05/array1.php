<?php 

   $salada = array("Maça","Abacate", "Banana");

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

         <?php  
         
         echo $salada[0] . "</br>";
         echo $salada[1] . "</br>";
         echo $salada[2] . "</br>";
         echo count($salada) . "</br>"; //quantos elementos array contém//
         $salada[] = "Kiwi" . "</br>"; //Adicionando elemento no array
         echo count($salada) . "</br>";
       
         ?>

         <pre> <!--Mostrar todos elementos dentro do array salada-->
              
              <?php 
              
                print_r($salada);
              
              
              ?>

         </pre>

    </body>
</html>