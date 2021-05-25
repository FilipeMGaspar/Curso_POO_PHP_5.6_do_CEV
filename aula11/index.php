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
            require_once 'Aluno.php';
            
            $v1 = new Visitante();
            //$v1->setNome("Juvenal");
            //$v1->setIdade(33);
            //$v1->setSexo('M');
            //print_r($v1);
            
            $a1 = new Aluno();
            $a1->setNome("Juliana");
            $a1->setIdade(16);
            $a1->setSexo('F');
            $a1->setCurso("Enfermagem");
            $a1->setMatricula(2021256123);
            print_r($a1);
        ?>
        </pre>
    </body>
</html>
