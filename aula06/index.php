<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06b​ - Encapsulamento</title>
</head>
<body>
<pre>
    <?php
         require_once "ControleRemoto.php";
         
         echo "<h2>Testando uma Interface!</h2>";
         $teste = new ControleRemoto();

         $teste->ligar();
         print_r($teste);
    ?>
</pre>
</body>
</html>