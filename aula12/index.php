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
            require_once 'Reptil.php';
            require 'Peixe.php';

            //Mamifero especialização de Animal
            $m = new Mamifero();
            $m->setPeso(26.35);
            $m->setIdade(1);
            $m->setMembros(4);
            $m->setCorPelo("Castanho");
            print_r($m);
            $m->alimentar();
            $m->emitirSom();
            $m->locomever();
        
            //Reptil especialização de Animal
            $r = new Reptil();
            $r->setPeso(0.956);
            $r->setIdade(2);
            $r->setMembros(5);
            $r->setCorEscama("Acastanhada e verde");            
            print_r($r);
            $r->alimentar();
            $r->emitirSom();
            $r->locomever();
            
            //Peixe especialização de animal
            $p = new Peixe();
            $p->setPeso(0.250);
            $p->setIdade(2);
            $p->setMembros(0);
            $p->setCorDeEscama("Dourada");
            print_r($p);
            $p->locomever();
            $p->emitirSom();
            $p->alimentar();
            $p->soltarBolha();
        ?>
        </pre>
    </body>
</html>
