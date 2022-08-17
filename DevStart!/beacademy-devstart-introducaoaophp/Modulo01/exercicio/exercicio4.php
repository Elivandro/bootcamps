<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 4 - While</title>
        <meta name="author" content="Elivandro Silva"/>
        <meta name="keywords" content="php, while, estrutura de repetição"/>
        <meta name="description" content="preenchendo 'select' com estrutura de repetição while"/>
    </head>
<body>
    <select>
        <option>selecione um ano</option>
        <?php

            $data = new DateTime();
            $ano = $data->format('Y');

            $maiorIdade = $ano - 18;
            $ano -= 100;

            while($maiorIdade >= $ano){
                echo "<option value={$maiorIdade}>{$maiorIdade}</option>"; 
                $maiorIdade--;
            }
        ?>
    </select>
</body>
</html>