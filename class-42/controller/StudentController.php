<?php

    include('../model/db.php');
    include('../model/Student.php');

    $obj = new Student();

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Submit'){
            $Data = [
                'Name'    => $_POST['name'],
                'Roll'    => $_POST['roll'],
                'Number'  => $_POST['number'],
                'Subject' => $_POST['subject'],
                'Address' => $_POST['address'],
            ];
            $obj->add($Data);
            header('Location: ../index.php');
        }
    }


?>