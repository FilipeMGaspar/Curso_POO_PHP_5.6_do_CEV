<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 09b - Exercício prático POO em PHP</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php'; 
            
            $ana = new Pessoa("ana", 26, 'F');
            echo "<br>";
            print_r($ana);
            $ana->fazerAniver();
            echo "<br>";
            print_r($ana);
        ?>
        </pre>
    </body>
</html>
