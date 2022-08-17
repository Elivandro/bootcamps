<?php

    function formatDateTime($datetime)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->format('d/m/Y - H:i');
    }

    function formatDate($date)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y');
    }

    function formatCnpjCpf($docNumber)
    {
        $CPF_LENGTH = 11;
        $cnpj_cpf = preg_replace("/\D/", '', $docNumber);

        if (strlen($cnpj_cpf) === $CPF_LENGTH) {
            return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
        }

        return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
    }

    function formatPhoneNumber($phoneNumber)
    {
        $celPhone  = 11;
        $phone      = preg_replace("/\D/", "", $phoneNumber);

        if(strlen($phone) === $celPhone){
            return preg_replace("/(\d{2})(\d{1})(\d{4})(\d{2})/", "(\$1) \$2 \$3-\$4", $phone);
        }

        return preg_replace("/(\d{2})(\d{2})(\d{2})/", "(\$1) \$2\$3-", $phone);

    }

    function formatCep($cepNumber)
    {
        $cep      = preg_replace("/\D/", "", $cepNumber);

        return preg_replace("/(\d{5})(\d{3})/", "\$1-\$2", $cep);

    }

    function formatMoney($money)
    {
        $clean_money = str_replace('.','',$money);
        return number_format($clean_money,2,',','.');
    }
