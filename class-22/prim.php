<?php
    // $number = 16;

    // if($number <= 1)
    // {
    //     $prim = 0 ;
    // }
    //     else
    //     {   prim = 0;
    //         for($i = 2; $i < $number; $i++)
    //         {
    //          if( $number % $i == 0)
    //          {
    //             $prim = 0;
    //             break;
    //         }
    //             else 
    //             $prim = 1;
    //         }
    //     }
    // if ( $prim )
    // echo 'number is prim';
    // else
    // echo 'number is not prim';

    $number= 11;
    $prime = 0;
    for($i=2; $i<=$number; $i++){
    if($number%$i==0){
    $prime=0;
    break;}
    else{
    $prime=1;
    }
    }
    if($prime==1)
        echo "number is prime <br>";
    
    else
        echo "number is not prime <br>";
    
    
    // $num =11;

    // $start = 2;
    // $limit = $num - 1;
    // $step = 1;

    // $Status = 1;

    // for($counter = $start; $counter <= $limit; $counter += $step)
    // {
    //     if($num % $counter == 0)
    //     {
    //         $Status = 0;
    //         break;
    //     }
            
    // }
    //     if($Status == 1)
    //         echo" is prime number <br>" ;
    //         else
    //         echo "number is not prime";
