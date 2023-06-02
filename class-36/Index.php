<?php
   include('connection.php');

    if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Roll = $_POST['roll'];
        $Phone = $_POST['phone'];
        $Address = $_POST['address'];

        $Query = "INSERT INTO students( name, roll, phone, address) 
        VALUES ('$Name','$Roll','$Phone','$Address')";

        $Result = mysqli_query($Connection,$Query);
        if(!$Result)
            echo "Registration Failed ";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enty</title>
</head>
<body>
    <div class="container">
    <a href="list.php">List</a>
        <form action="index.php" enctype="miltipart/form-data" method="POST">
            
            <input type="text" name="name" placeholder="name" > <br><br>
            <input type="numbrr" name="roll" placeholder="roll"> <br><br>
            <input type="number" name="phone" placeholder="phone"> <br><br>
            <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
            <input type="submit" name="submit" value="register"><br><br>
            
        </form>
    </div>
</body>
</html>