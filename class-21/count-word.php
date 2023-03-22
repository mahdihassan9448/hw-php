<?php
    $delimeters = [',','/'];
    $str = "bang ladesh /  jhdfu,gf";

    $str = trim($str);

    $str = str_replace($delimeters,' ', $str);

    $str = explode(' ', $str);

    echo sizeof($str);