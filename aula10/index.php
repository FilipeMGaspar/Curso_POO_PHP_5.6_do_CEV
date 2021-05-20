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
            
            //print_r($p1);
            //print_r($p2);
            //print_r($p3);
            //print_r($p4);
            
            $p1->setSexo('M');
            $p4->setSexo("F");
            
            $p2->setCurso("Informática");
            $p3->setSalario(2500.75);
            $p4->setSetor("Estoque");
            
            
            $p1->receberAumento(500.20); 
            $p2->mudarTrabalho();
            $p4->cancelarMatr();
            
            print_r($p1);
            echo '<br>';
            print_r($p2);
            echo '<br>';
            print_r($p3);
            echo '<br>';
            print_r($p4);
        ?>
        </pre>
    </body>
</html>
