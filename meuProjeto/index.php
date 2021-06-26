<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício de treino 01</title>
    </head>
    <body>
        <pre>
            <?php
            
                //Exercicio de treino 02
                require_once 'ligaMySql.php';
                $cmysql = new ligaMySql();
                $cmysql->ligacao();
                print_r($cmysql);
            
                /*Exercicio de treino 01
                 * require_once 'conecao.php';

                $conect = new conecao();
                $conect->criarLigacao("user", "db_teste", "MTIzNDU2");
                print_r($conect);
                $conect->verPassword();*/    
            ?>
        </pre>
    </body>
</html>
