<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

           <?php 
                
                 date_default_timezone_set('America/Sao_paulo');
                 setlocale(LC_TIME, "pt_BR");

                 //criar elementos

                 $ano = strftime('%Y');
                 $mes = strftime('%B');
                 $dia = strftime('%d'); 
                 $dia_da_semana = strftime('%A'); 

                 $hora    = strftime('%H');
                 $minuto  = strftime('%M');
                 $segundo = strftime('%S');

                 echo $dia_da_semana . ", " . $dia . " de " . $mes . " de " . $ano . " - " . $hora . ":" . $minuto . ":" . $segundo
           
           ?>

    </body>
</html>