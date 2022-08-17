<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 5 - For</title>
        <meta name="author" content="Elivandro Silva"/>
        <meta name="keywords" content="php, for, estrutura de repetição"/>
        <meta name="description" content="preenchendo 'select' com estrutura de repetição for"/>
    </head>
<body>
<form action="" method="post">
<select name="dianasc">
        <option>selecione um dia</option>
        <?php

            $diaIdade = 1;

            for($dia = 31; $diaIdade <= $dia; $diaIdade++){

                echo "<option value={$diaIdade}>{$diaIdade}</option>"; 

            }

        ?>
</select>
<select name="mesnasc">
        <option>selecione um mes</option>
        <?php

            $mesIdade = 1;

            for($mes = 12; $mesIdade <= $mes; $mesIdade++){

                echo "<option value={$mesIdade}>{$mesIdade}</option>"; 

            }

        ?>
</select>
<select name="anonasc">
        <option>selecione um ano</option>
        <?php

            $data = new DateTime();
            $ano = $data->format('Y');

            $maiorIdade = $ano - 18; //2004

            for($ano -= 100; $maiorIdade >= $ano; $maiorIdade--){

                echo "<option value={$maiorIdade}>{$maiorIdade}</option>"; 

            }

        ?>
</select>
<button>Enviar</button>
</form>
</body>
</html>
<?php

    if($_POST){
        echo "<br/>";
        echo $_POST["dianasc"];
        echo "/";
        echo $_POST["mesnasc"];
        echo "/";
        echo $_POST["anonasc"];
    }