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
                require_once 'Lobo.php';

                $m = new Mamifero();
                $m->setPeso(25.6);
                $m->setIdade(4);
                $m->setMembros(4);
                $m->setCorPelo("Castanho");
                print_r($m);
                $m->emitirSom();
                
                //Lobo especialização de mamifero
                $l = new Lobo();
                $l->setIdade(3);
                $l->setPeso(30);
                $l->setMembros(4);
                $l->setCorPelo("Cinzento");
                print_r($l);
                $l->emitirSom();
            ?>
        </pre>
    </body>
</html>
