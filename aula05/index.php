!   <!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05b​ - Exemplo Prático em PHP</title>
</head>
<body>
    <pre>
        <?php
            require_once "ContaBanco.php";

            $tst = new ContaBanco();
            $tst->setNumConta(256);
            $tst->setTipoConta("CC");
            $tst->setDonoConta("Marineuza");
            $tst->setSaldoConta(853.39);
            print_r($tst);
        ?>
    </pre>
</body>
</html>