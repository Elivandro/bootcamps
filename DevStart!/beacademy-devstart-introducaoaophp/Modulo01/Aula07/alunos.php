<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 2 - tabela HTML com PHP</title>
        <meta name="author" content="Elivandro Silva"/>
        <meta name="keywords" content="php, tabela, produtos, html"/>
        <meta name="description" content="Tabela de produto simples com html e php"/>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
<body>
<?php

    $aluno1 =["nome" => "Chiquinho da Silva",
            "email" => "Chiquiinho@gmail.com",
            "telefone" => "69 99999 5949",
            "notas" => [
                5,
                7,
                8,
                5 // 25
            ]];

    $aluno2 =["nome" => "Jose da Silva",
            "email" => "josesil@mail.com.br",
            "telefone" => "69 99933 4959",
            "notas" => [
                8,
                4,
                9,
                10 // 31 
            ]];

    $aluno3 =["nome" => "Sebastião Andrade",
            "email" => "sebastiao@gmail.com",
            "telefone" => "69 99956 5969",
            "notas" => [
                7,
                8,
                7,
                9 // 31
            ]];

    $aluno4 =["nome" => "Luiza Vitoria",
            "email" => "lVitoria@gmail.com",
            "telefone" => "69 99978 5129",
            "notas" => [
                7,
                10,
                7,
                9 // 33
            ]];


    $alunos = [$aluno1, $aluno2, $aluno3, $aluno4];
?>
<div class="container">
    <table class="table table-hover table-striped mt-5">
        <h2 class="mt-5 text-center">Tabela de média dos Alunos</h2>
        <hr/>
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Média</th>
            </tr>
        </thead>
        <tbody>
                <?php

                    foreach($alunos as $aluno){

                            $index = 0;
                            $total = 0;
                            while($index < count($aluno['notas'])){

                                $total += $aluno['notas'][$index];
                                $index++;
                            }

                            $media = $total / 4;

                            $mediaFormatada = number_format($media, 1, '.', '');

                        echo "<tr>
                                <td>{$aluno['nome']}</td>
                                <td>{$aluno['email']}</td>
                                <td>{$aluno['telefone']}</td>
                                <td>{$mediaFormatada}</td>
                            </tr>";


                    }

                ?>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>