<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 12b - Polimorfismo em PHP (Parte 1)</title>
    </head>
    <body>
        <?php
        // put your code here
            require_once 'Mamifero.php';
            //$a = new Animal(); Uma classe abstrata não pode ser instanciada
            
            $m = new Mamifero();
            $m->alimentar();
        ?>
    </body>
</html>
