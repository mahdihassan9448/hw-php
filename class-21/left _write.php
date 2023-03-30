<?php
    // $str = '4043L46878M4R5276N4880';   // 4043346878745527684880     
                            
    // $str = str_split($str);

    // $size = sizeof($str);

    // for($i = 0; $i < $size; $i++)
    // {
    //     if($str[$i]== 'L')
    //         $str[$i] = $str[$i-1];
    //     if($str[$i]== 'R')
    //         $str[$i] = $str[$i+1];
        
    //         if($str[$i]== 'M')
    //         $str[$i] = $str[$i-2];
    //     if($str[$i]== 'N')
    //         $str[$i] = $str[$i+2];   
             
    //     echo $str[$i];
    // }



    $str = '4043L46878M7754R5276N4880';   // 4043346878745527684880     
                            
    $str = str_split($str);
    $size = sizeof($str);
    
    for($i = 0; $i < $size; $i++)
    {

        switch($str[$i]) {
            case 'L':
                $str[$i] = $str[$i-1];
                break;
            
            case 'M':
                $str[$i] = $str[$i+2];
                break;

            case 'R':
                $str[$i] = $str[$i+1];
                break;
                    
            case 'N':
                $str[$i] = $str[$i-2];
                break;

            default:
                break;
        }
        echo $str[$i];
    }