<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

          <?php 
          
           $data1 = new DateTime("26-11-1997");
           $data2 = new DateTime("25-11-1997");

           $intervalo = $data1 -> diff($data2);
        
          ?>

          <pre>
                <?php  print_r($intervalo)?>
          </pre>

          <pre>
          
                <?php  print_r($intervalo -> format('%a'))?>
          </pre>


    </body>
</html>