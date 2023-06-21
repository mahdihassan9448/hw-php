<?php

    // session_start();

    // if(!$_SESSION['LoggedIn'] == TRUE){
    // session_destroy();
    // header('Location:login.php');
    // }

    //     include('header.php');
    //     include('sidebar.php');
        
    //     if (isset($_REQUEST['page'])) {
    //         $PageName = $_REQUEST['page'].".php";
    //         include('templates/'.$PageName);
    //     }
    //     else 
    //         include('templates/home.php');

    //     include('footer.php');
            // include('index.php');
            // include('sidebar.php');

            // if(isset($_REQUEST['page'])){
            //     $PageName = $_REQUEST['page'].".php";
            //     include ('templates/'.$PageName);
            // }
            // else
            //     include ('templates/home.php');
            // include('footer.php');


        // include('header.php');
        // include('sidebar.php');

        // if(isset($_REQUEST['page']))
        // {
        //     $PageName = $_REQUEST['Page'].".php";
        //     include('templates/'.$PageName);
        // }
        // else{
        // include('templates/home.php');}
       
        // include('footer.php');


        include('header.php');
        include('sidebar.php');

        if(isset($_REQUEST['page'])) {
            $PageName = $_REQUEST['page'].".php";
            include('templates/'.$PageName);
        }
        else{
            include('templates/home.php');
        }
        include('footer.php');
?>