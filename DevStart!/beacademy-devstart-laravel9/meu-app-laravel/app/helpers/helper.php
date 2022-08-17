<?php

    function formatDateTime($dateTime)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dateTime)->format('d/m/Y - H:i');
    }

    function formatMoney($money)
    {
        $clean_money = str_replace('.', '', $money);

        return 'R$ '.number_format($clean_money, 2, ',', '.');
    }