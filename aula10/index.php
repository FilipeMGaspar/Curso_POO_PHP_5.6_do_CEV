<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 10b - Herança (Parte 1) - PHP</title>
    </head>
    <body>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            
            //Programa Principal
            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();
            
            
        ?>
    </body>
</html>
