<?php
    $string = 'tecnical';
    $sub_string = 'nic';

    $array = str_split($string);
    $sub_array = str_split($sub_string);

    $size = sizeof($array);
    $sub_size = sizeof($sub_array);

    $position = [];

    for( $i=0; $i<$sub_size; $i++ )
    {
        for( $j=0; $j<$size; $j++ )
        {
            if( $sub_array[$i] == $array[$j] )
            {
                array_push($position,$j);
            }
               
        
        }        
    }
    echo $position[0];
    