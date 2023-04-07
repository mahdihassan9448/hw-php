<?php
    $a = 10;
    $b = 20;
    $c = 30;

    $s = ($b*$b) - (4*$a*$c);

    if($s < 0)
    {
        echo "Roots are emaginary";
    }
    elseif($s == 0)
    {
        $x1 = (-$b+sqrt($s))/(2*$b);
        echo $x1;
    }
    else
    {
        $x1 = (+$b+sqrt($s))/(2*$b);
        $x2 = (-$b-sqrt($s))/(2*$b);
        echo $x2;
    }