<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Lutador.php';
                $l = new Lutador("MegaKiller", "Tuga", 900, 1.85, 66.3, 200, 20, 85);
                $l->ganharLuta();
                //print_r($l);
                //$l->apresentar();
                $l->status();
            ?>
        </pre>    
    </body>
</html>
