<?php

// $Host  = 'localhost';
// $Name  = 'root';
// $Pass  = '';
// $DB    = 'dashbord';

// $Connection = mysqli_connect($Host, $Name, $Pass, $DB);

// if(!$Connection){
//     echo "DB connection failed";
// }

$Host = 'localhost';
$Name = 'root';
$Pass = '';
$Db = 'dashbord';


$Connection = mysqli_connect ($Host, $Name, $Pass, $Db);

if(!$Connection){
    echo "Db not connected";
}

?>