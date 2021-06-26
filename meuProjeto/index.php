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
                $conect->criarLigacao("user", "db_teste", "MTIzNDU2");
                print_r($conect);
                $conect->verPassword();
            ?>
        </pre>
    </body>
</html>
