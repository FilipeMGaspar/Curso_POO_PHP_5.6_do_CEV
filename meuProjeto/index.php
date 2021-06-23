<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício de treino 01</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'conecao.php';

                $conect = new conecao();
                $conect->criarLigacao("user", "db_teste", 123456);
                print_r($conect);

            ?>
        </pre>
    </body>
</html>
