<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 

                <?php 

                    if (isset($_POST["nome"])) {
                        $nome = $_POST["nome"];
                    } else {
                        $nome = "Sem definição";
                    }

                    if (isset($_POST["email"])) {
                        $email = $_POST["email"];
                    } else {
                        $email = "Sem definição";
                    }
                
                    $nome = $_POST["nome"];
                    $email = $_POST["email"];

                    echo "Meu nome: " . $nome . "<br>";
                    echo "Meu email: " . $email . "<br>";

                ?>

    </body>
</html>