<?php

$number = "24476456766";
$array = str_split($number);
$size = sizeof($array);

for( $i = 0; $i < $size; $i++ )
{
  $sum = $array[$i] + $array[$size-1];
  break;
}
echo $sum;