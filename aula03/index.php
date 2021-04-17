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
       
        // $c1->ponta = 0.5; //Não se pode modoficar um atributo privado só modificado dentro da própria classe
        // $c1->carga=99; //Nao se pode modificar um atributo protegido
        //$c1->tampada = true; //Nao se pode modificar um atributo protegido
    
        echo "<br>";
        $c1->rabiscar();
        $c1->destampar();
        echo "<br>";
        print_r($c1);
    ?>
    </pre>
</body>
</html>