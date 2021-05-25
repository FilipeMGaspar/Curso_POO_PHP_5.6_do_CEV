<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11b - Herança (Parte 2) - PHP</title>
    </head>
    <body>
        <pre>
        <?php
            //require_once 'Pessoa.php';            
            //$p1 = new Pessoa(); com erro classe abestrata não pode ser instanciada
            
            require_once 'Visitante.php';
            $v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade(33);
            $vi->setSexo('M');
            print_r($v1);
        ?>
        </pre>
    </body>
</html>
