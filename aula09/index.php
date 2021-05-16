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
            require_once 'Livro.php';
            
            $ana = new Pessoa("ana", 26, 'F');
            echo "<br>";
            print_r($ana);

            $sql = new Livro("PHP Básico", "Gustavo Guanabara", 659, $ana);  
            echo "<br>";
            $sql->detalhes();
        ?>
        </pre>
    </body>
</html>
