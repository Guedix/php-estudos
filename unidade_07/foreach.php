<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Foreach</title>
    </head>

    <body>

         <?php 
         
             $salada = array("Abacate","Limão","Uva","Morango");

                foreach($salada as $fruta) {
                    echo $fruta . "<br>";

                }
         
         ?>

    </body>
</html>