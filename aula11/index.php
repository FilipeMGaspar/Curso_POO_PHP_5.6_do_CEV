<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11b - Herança (Parte 2) - PHP</title>
    </head>
    <body>
        <?php
            //require_once 'Pessoa.php';            
            //$p1 = new Pessoa(); com erro classe abestrata não pode ser instanciada
            
            require_once 'Visitante.php';
            $v1 = new Visitante();
        ?>
    </body>
</html>
