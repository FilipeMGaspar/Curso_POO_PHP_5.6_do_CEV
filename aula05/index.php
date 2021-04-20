<!DOCTYPE html>
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
            $conta01 = new ContaBanco();
            $conta01->abrirConta("CP");
            $conta01->setNumConta("001");
            $conta01->setDonoConta("Josefredo");            
            print_r($conta01);

            echo "<br><br>";
            $conta02 = new ContaBanco();
            $conta02->abrirConta("CC");
            $conta02->setNumConta(101);
            $conta02->setDonoConta("Marivaldo D'Santos");
            print_r($conta02);
            echo "<br><p>PAGAMENTO DA MENSALIDADE</p>";
            $conta02->pagarMensal();           
            print_r($conta02);
            echo "<br><p>Depósito de R$ 10</p>";
            $conta02->depositar(10);
            echo "<br>";
            print_r($conta02);
            echo "<br><p>Levantamento de R$ 50</p>";
            $conta02->sacar(50);
            echo "<br><p>Tentativa de Fechar a Conta</p>";
            $conta02->fecharConta();

            //Linha utilizadas para testes
            //$tst = new ContaBanco();            
            //$tst->pagarMensal();
            //print_r($tst);
            //$tst->abrirConta("CC");
            //$tst->sacar(50);
            //$tst ->depositar(20);    
            //$tst->setSaldoConta(0);
            //$tst->fecharConta();
            // $tst->setNumConta(256);
            // $tst->setTipoConta("CC");
            // $tst->setDonoConta("Marineuza");
            // $tst->setSaldoConta(853.39);
            // $tst->setStatusConta(true);
            // print_r($tst);
        ?>
    </pre>
</body>
</html>