<?php
    include('connection.php');

    $Query ="SELECT * FROM user";
    $Result = mysqli_query($connection,$Query);
    // $Result = mysqli_fetch_array($Result);
    echo mysqli_num_rows($Result);
    // var_dump($Result);
?>