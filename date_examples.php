<?php

date_default_timezone_set('America/Sao_Paulo');

function days_left(int $day) : int
{
    return abs(((int) date('w')) - $day);
}


echo "Now is " . date('ga');
echo "<br> Today is " . date('l');
echo "<br> There is " . days_left(6) . " days left until the next Saturday";
echo "<br> Now where are on " . date('F') . ".";