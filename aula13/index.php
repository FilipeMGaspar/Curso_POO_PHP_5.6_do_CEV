<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 13b - Polimorfismo Sobrecarga (Parte 2)</title>
    </head>
    <body>
        <pre>
            <?php
                //Programa principal
                require_once 'Mamifero.php';

                $m = new Mamifero();
                $m->setPeso(25.6);
                $m->setIdade(4);
                $m->setMembros(4);
                $m->setCorPelo("Catanho");
                print_r($m);
            ?>
        </pre>
    </body>
</html>
