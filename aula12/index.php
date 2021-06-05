<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 12b - Polimorfismo em PHP (Parte 1)</title>
    </head>
    <body>
        <pre>       
 <?php
        //require_once 'Animal.php';    
        //$a = new Animal(); Uma classe abstrata não pode ser instanciada
 
        require_once 'Mamifero.php';
            
        $m = new Mamifero();
        $m->setPeso(26.35);
        $m->setIdade(1);
        $m->setMembros(4);
        $m->setCorPelo("Castanho");
            
        print_r($m);
        echo '<br>';
        $m->alimentar();
        $m->emitirSom();
        $m->locomever();
        ?>
        </pre>
    </body>
</html>
