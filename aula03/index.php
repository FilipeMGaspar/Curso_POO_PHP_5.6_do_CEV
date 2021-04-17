<!DOCTYPE html>
<html lang="pt-Pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03b​ - Configurando Visibilidade de Atributos e Métodos</title>
</head>
<body>
    <?php
        require_once "Caneta.php";

        $c1 = new Caneta;
        $c1->modelo = "BIC Cristal";

        var_dump($c1);

    ?>
</body>
</html>