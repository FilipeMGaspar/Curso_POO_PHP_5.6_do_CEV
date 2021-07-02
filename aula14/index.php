<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 14b - Projeto Final em PHP (Parte 1)</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Video.php';
                require_once 'Gafanhoto.php';

                $v[0] = new Video("Aula 1 de POO");
                $v[1] = new Video("Aula 12 de PHP");
                $v[2] = new Video("Aula 15 de HTML5");
                print_r($v);
                
                $g[0] = new Gafanhoto("Jubileu", 22, 'M', "Juba");
                $g[1] = new Gafanhoto("Creuza", 25, 'F', "Creuzinha")
                print_r($g);
            ?>
        </pre>
    </body>
</html>
