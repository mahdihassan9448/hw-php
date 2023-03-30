<?php
    $number = 5873657;
    $last_digit = $number % 10;
    
    while($number >= 10)
    {
        $number = (int)($number / 10);
    }
    echo $last_digit + $number;