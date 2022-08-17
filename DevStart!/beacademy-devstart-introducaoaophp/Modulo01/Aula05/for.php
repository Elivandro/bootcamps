<select>
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