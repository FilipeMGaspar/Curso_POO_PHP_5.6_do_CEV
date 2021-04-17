<!DOCTYPE html>
<html lang="pt-Pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03b​ - Configurando Visibilidade de Atributos e Métodos</title>
</head>
<body>
    <pre>
    <?php
        require_once "Caneta.php";

        $c1 = new Caneta;
        $c1->modelo = "BIC Cristal";
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        //var_dump($c1);
        print_r($c1);

    ?>
    </pre>
</body>
</html>