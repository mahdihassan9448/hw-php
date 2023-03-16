<?php 

    // $start = 1;
    // $end = 1000;
    // $step = 1;

    // $line = 0;

    // for($counter = $end; $counter >= $start; $counter -= $step)
    // {

    //     if($line % 5 == 0)
    //         echo "<br>";

    //     $line++;

    //     echo $counter." ";
    // }


    $number = 1000;

    while($number >= 1){

        for($i = 1; $i <= 5; $i++){
        echo " ". $number." , ";
        $number--;
        }
        echo "<br>";
    }