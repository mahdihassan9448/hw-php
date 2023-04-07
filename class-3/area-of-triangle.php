<?php
// $a = 6 ;
// $b = 7 ;
// $c = 8 ;

// $s = ($a + $b + $c)/2 ;
// if ( ($a + $b) > $c && ($b + $c) > $a && ($c + $a) > $b)
// {
//     $area = sqrt ($s*($s-$a)*($s-$b)*($s-$c));
//     echo "the area of this tringle".round($area);
// }
// else
// {
//     echo "this Tringle is imaginary";
// }



$a = 10 ;
$b = 21 ;
$c = 30 ;

$s = ($a + $b + $c)/2 ;
if ( ($a + $b) > $c && ($b + $c) > $a && ($c + $a) > $b)
{
    $area = sqrt ($s*($s-$a)*($s-$b)*($s-$c));
    echo "the area of this tringle".($area);
}
else
{
    echo "this Tringle is imaginary";
}

?>