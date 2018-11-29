<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

          <?php 
          
               $agenda = array(

                 "Nome" => "Allan",
                 "sobrenome" => "Guedes",
                 "salario" => 1000,
                 "aniversario" =>  "25/11/1997",

               );

               foreach( $agenda as $atributo => $valor) {
                   echo $atributo . ": " . $valor . "<br>";
               }
          
          
          
          ?>

    </body>
</html>