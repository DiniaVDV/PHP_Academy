<?php

//Вычислить количество секунд в году и остаток от деление этого значения на 2

$sec_day = 60 * 60 * 24;
$q_days = 365;
$sec_year = $q_days * $sec_day;

echo "В году {$sec_year} секунд.";