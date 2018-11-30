<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

          <?php 
          
                function retornarDiaria($salario, $dia, $cotacao) {

                    $real = number_format($salario/$dia,2);
                    $dolar = number_format(($salario/$dia)/$cotacao,2);
                    return array($real,$dolar);
                }

               $diaria_array = retornarDiaria(3000,10,2.5);
               
               echo "Diaria em R$ " . $diaria_array[0] . "<br>";
               echo "Diaria em US$ " . $diaria_array[1] . "<br>";

          ?>

    </body>
</html>