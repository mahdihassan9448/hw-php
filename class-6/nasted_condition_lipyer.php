<?php
    $year = 1900;

    if($year % 100 == 0)
    {
        if($year % 4 ==0)
        {
            echo  " is leaper";
        }
        else
        {
            echo "is not leaper";
        }
    }
    else
    {
        if($year % 400 == 0)
        {
            echo "is leaper";
        }
        else
        {
            echo "not leaper";
        }
    }