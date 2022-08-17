
<?php

    $data = new DateTime();
    $mes = $data->format('m');

    switch($mes){
        case "01":
            echo "Janeiro";
            break;
        case "02":
            echo "Fevereiro";
            break;
        case "03":
            echo "Março";
            break;
        case "04":
            echo "Abril";
            break;
        case "05":
            echo "Maio";
            break;
        case "06":
            echo "Junho";
            break;
        case "07":
            echo "Julho";
            break;
        case "08":
            echo "Agosto";
            break;
        case "09":
            echo "Setembro";
            break;
        case "10":
            echo "Outubro";
            break;
        case "11":
            echo "Novembro";
            break;
        case "12":
            echo "Dezembro";
            break;
        default:
            echo "Mês não declarado";
            break;
    }
