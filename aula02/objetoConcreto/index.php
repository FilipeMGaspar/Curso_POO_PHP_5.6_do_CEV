<!DOCTYPE html>
<html lang="pt_PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "Impressora.php";

        $hp = new Impressora;
        $hp->marca = "HP";
        $hp->modelo = "Officejet 2620";
        $hp->tipo = "Jato de tinta";
        $hp->desligar();
        $hp->imprimir();
        print_r($hp);
        echo "<br>";

        
    ?>
</body>
</html>