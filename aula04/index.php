<!DOCTYPE html>
<html lang="pt-Pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04b​ - Métodos Getter, Setter e Construtor
    </title>
</head>
<body>
    <pre>
        <?php
            require_once "Caneta.php";
            $c1 = new Caneta();
           // $c1->setMarca("Uniball");
            $c1->setCor("Preta");
            $c1->setPonta(0.5);
            $c1->setCarga(85);
            $c1->tampar();
            echo "<br>";
           // echo "Eu tenho uma caneta ". ($c1.getMarca()) ." de ponta ". ($c1.getPonta());
            echo "<br>";
            print_r($c1);

        ?>
    </pre>
</body>
</html>