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
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';

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
            
            //Ave especialização de animal
            $a = new Ave();
            $a->setPeso(0.750);
            $a->setIdade(3);
            $a->setMembros(2);
            $a->setCorPenas("Verde");
            print_r($a);
            $a->locomever();
            $a->emitirSom();
            $a->alimentar();
            $a->fazerNinho();
            
            //Canguru especialização de Mamifero
            $cg = new Canguru();
            $cg->setPeso(32);
            $cg->setMembros(3);
            $cg->setIdade(4);
            $cg->setCorPelo("Castanho");
            print_r($cg);
            $cg->locomever();
            $cg->alimentar();
            $cg->emitirSom();
            
            //Cachorro especialização de Mamifero
            $cao = new Cachorro();
            $cao->setPeso(10);
            $cao->setIdade(3);
            $cao->setMembros(4);
            $cao->setCorPelo("Preto");
            print_r($cao);
            $cao->locomever();
            $cao->alimentar();
            $cao->emitirSom();
            $cao->enterrarOsso();
            $cao->abanarRabo();
        ?>
        </pre>
    </body>
</html>
