<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 08b​ - Agregação entre Objetos em PHP</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Lutador.php';
                /*$l = new Lutador("MegaKiller", "Tuga", 900, 1.85, 66.3, 200, 20, 85);
                $l->ganharLuta();
                //print_r($l);
                //$l->apresentar();
                $l->status();*/
                
                $l = array();
                
                $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
                //$l[0]->apresentar();
                $l[0]->ganharLuta();
                $l[0]->status();
                
                $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
                echo '<br>';
                $l[1]->status();
                
                $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
                echo '<br>';
                //$l[2]->apresentar();
                $l[2]->empatarLuta();
                $l[2]->status();
                
                $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
                echo '<br>';
               // $l[3]->apresentar();
                $l[3]->ganharLuta();
                $l[3]->status();
                
                $l[4] = new Lutador("UfoCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
                echo '<br>';
                //$l[4]->apresentar();
                $l[4]->status();
               
                $l[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);
                echo '<br>';
                //$l[5]->apresentar();
                $l[5]->perderLuta();
                $l[5]->status();
            ?>
        </pre>    
    </body>
</html>
