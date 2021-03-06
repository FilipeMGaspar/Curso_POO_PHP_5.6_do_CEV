<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 13b - Polimorfismo Sobrecarga (Parte 2)</title>
    </head>
    <body>
        <pre>
            <?php
                //Programa principal
                require_once 'Mamifero.php';
                require_once 'Lobo.php';
                require_once 'Cachorro.php';

                $m = new Mamifero();
                $m->setPeso(25.6);
                $m->setIdade(4);
                $m->setMembros(4);
                $m->setCorPelo("Castanho");
                print_r($m);
                $m->emitirSom();
                
                //Lobo especialização de mamifero
                $l = new Lobo();
                $l->setIdade(3);
                $l->setPeso(30);
                $l->setMembros(4);
                $l->setCorPelo("Cinzento");
                print_r($l);
                $l->emitirSom();
                
                //cachorro especialização de lobo e de mamifero
                $cao = new Cachorro();
                $cao->setIdade(3);
                $cao->setPeso(18);
                $cao->setMembros(4);
                $cao->setCorPelo("Preto");
                print_r($cao);
                $cao->emitirSom();
                $cao->reagirFrase("Comida");
                $cao->reagirFrase("Vai para o castigo!");
                $cao->reagirHoras(12, 0);
                $cao->reagirHoras(19, 20);
                $cao->reagirHoras(10, 30);
                $cao->reagirDono(true);
                $cao->reagirDono(false);
                $cao->reagirIdadePeso(3, 4);
                $cao->reagirIdadePeso(4, 12);
                $cao->reagirIdadePeso(5, 9);
                $cao->reagirIdadePeso(8, 13);
            ?>
        </pre>
    </body>
</html>
