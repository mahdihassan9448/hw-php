<?php
    // for( $i = 0; $i <= 12; $i++ )
    // {
    //     for( $j = 0; $j <= $i; $j++ )
    //     {
    //         echo '#';
    //     }
    //     echo "<br>";
    // }

    // for( $i = 12; $i > 0; $i-- )
    // {
    //     for( $j = $i; $j > 0; $j-- )
    //     {
    //         echo '*';
    //     }
    //     echo "<br>";
    // }

    for($i = 0; $i <= 6; $i++){  
        for($k = 5; $k >= $i; $k--){  
            echo "&nbsp;&nbsp;";  
        }  
        for($j = 1;$j <= $i; $j++){  
            echo "&nbsp;* ";  
        }  
        echo "<br>";  
        }	  

 