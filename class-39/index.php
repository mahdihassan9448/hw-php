<?php

    include('header.php');

    if(isset($_REQUEST['page'])) {
        $page = $_REQUEST['page'];

       $pageName = $page.".php";
        include($pageName);
    }
    else{
        include('home.php');
    }

    include('footer.php');


?>