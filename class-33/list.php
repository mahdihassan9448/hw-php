<?php
    include('connection.php');
    $Query = "SELECT * FROM user";
    $Result = mysqli_query($Connection,$Query);
    // var_dump($Result);
   
    $Result = mysqli_fetch_assoc($Result);
    
?>