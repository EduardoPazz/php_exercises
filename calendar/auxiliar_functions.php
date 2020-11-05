<?php

date_default_timezone_set('America/Sao_Paulo');

function initial_day() : int
{
    $day_month = (int) date('j');
    $day_week = (int) date('N');
    $start_day_week = ($day_month % 7) - ($day_week % 7) - 1;
    return ($start_day_week === -1 ? 6 : abs($start_day_week));
}