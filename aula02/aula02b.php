<!DOCTYPE html>
<html lang="pt-Pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02b​ - Criando Classes e Objetos em PHP</title>
</head>
<body>
    <?php
        require_once "Caneta.php";

        $c1 = new Caneta();

        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;
        $c1->destampar();
        $c1->rabiscar();
        var_dump($c1);
    ?>
</body>
</html>