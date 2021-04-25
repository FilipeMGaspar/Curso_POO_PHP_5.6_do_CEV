<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Gestaobiblioteca.php';
            $eb = new GestaoBiblioteca();
            $eb->emprestarLivro();
            $eb->reberLivroEmprestado();
            print_r($eb);
        ?>
        </pre>
    </body>
</html>
