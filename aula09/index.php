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
            
            $ana = new Pessoa("Ana", 26, 'F');
            echo "<br>";
            print_r($ana);

            $sql = new Livro("PHP Básico", "Gustavo Guanabara", 659, $ana);  
            echo "<br>";
            $sql->detalhes();
            //$sql->avancarPag(300);
            $sql->recuarPag(400);
            //$sql->folhearLivro(100);
        ?>
        </pre>
    </body>
</html>
