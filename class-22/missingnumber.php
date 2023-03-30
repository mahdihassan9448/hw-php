<?php
    $n = 9;
    $array = [1,2,3,4,5,7,8,9];
    $size = sizeof($array);

    $missing = 0;
    for($i=1; $i<=$n; $i++)
    {
    //    if(!in_array($i,$array))
    //     $missing = $i;
     $status = 0;
     
        for($j=0; $j<$size; $j++)
      {
        if($array[$j] == $i)
        {
            $status = 1;
            break;
        }
        else  $status = 0;
      }
      if(!$status)
      $missing=$i;
    }
    echo $missing;