<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02b​ - Exercício - Objeto Abstrato  Aluno de Escola</title>
</head>
<body>
    <?php
        require_once "Alunoeb.php";

        $Bruno = new Alunoeb;
        $Bruno->nome = "Bruno Mateus";
        $Bruno->anoNascimento = 2008;
        $Bruno->turma = "3º a";
        $Bruno->increver();
        $Bruno->entrarNaEscola();
        print_r($Bruno);

        $Ana = new Alunoeb;
        $Bruno->nome = "Ana Silva";
        $Bruno->anoNascimento = 2009;
        $Bruno->turma = "4º a";
        $Bruno->transferir();
        $Bruno->entrarNaEscola();
        print_r($Ana);

    ?>
</body>
</html>