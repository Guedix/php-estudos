<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

          <?php 
          
                function retornarDiaria($salario, $dia) {
                    return number_format($salario/$dia,2);
                }

               $diaria = retornarDiaria(2000,15);
               
               echo $diaria

          
          ?>

    </body>
</html>