<?php
$m=3;    //"carecter"
if($m >= "a" && $m <= "z" || $m>= "A" && $m <= "Z")
{
    echo "is Alphabet carecter";
}
elseif($m >= 0 || $m < 0)
{
    echo "is number";
}
else
echo "spesal carecter";

echo "<br>";
echo "<br>";
echo "<br>";

$m=-6;
if($m >= 0 )
{
    echo "pojetiv";
}
else
    echo "nagetiv";
