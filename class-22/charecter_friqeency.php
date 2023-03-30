<?php
    $string = 'hfh jfhy hdygfg';
    $array = str_split($string);
    $size = sizeof( $array );
    $charecter = 'f';
    $counter = 0;
    for($i=0; $i<$size; $i++)
    {if
        ($string[$i] == $charecter)
            $counter++;
    }
    echo $counter;