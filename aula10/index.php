<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 10b - Herança (Parte 1) - PHP</title>
    </head>
    <body>
        <pre>
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
            
            $p1->setNome("Pedro");
            $p2->setNome("Maria");
            $p3->setNome("Cláudio");
            $p4->setNome("Fabiana");
            
            print_r($p1);
        ?>
        </pre>
    </body>
</html>
