<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Switch</title>
    </head>

    <body>

         <?php 
         
         $dia = "quinta";

         switch ($dia) {
       
            case "Segunda":
            echo "Hoje ainda é segunda-feira : ( <br>";
            break; //Caso não coloque isso, todos os textos abaixo, aparecer//

            case "quarta":
            echo "Falta pouco para sexta-feira" . "<br>";
            break;

            case "Sexta":
            echo "Hoje é Sexta-feira \o/" . "<br>";
            break;

            default: //serve para uma ocasião que não contamos//
            echo "Trabalha ai que está chegando";

         }
               
         ?>

    </body>
</html>