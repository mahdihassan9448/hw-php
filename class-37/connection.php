<?php
     $Host = 'localhost';
     $User = 'root';
     $Pass = '';
     $DB = 'demo';
 
     $Connection = mysqli_connect($Host,$User,$Pass,$DB);
 
     if(!$Connection)
         echo 'connection is not connected';