<?php
   include('connection.php');

    if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Rool = $_POST['rool'];
        $Phone = $_POST['phone'];
        $Addres = $_POST['addres'];

        $Query = "INSERT INTO user( name, rool, phone, addres) VALUES ('$Name','$Rool','$Phone','$Addres')";

        $result = mysqli_query($connection,$Query);
        if($result){
            echo "Registration Successfully";
        }else{
            echo "Registration Failed !";
        }

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
    <div class="">
        <form action="Connection.php" enctype="miltipart/form-data" method="POST">
            <h1>Student Enty</h1>
            <input type="text" name="name" placeholder="name" class="form-control"> <br><br>
            <input type="numbrr" name="rool" placeholder="rool" class="form-control"> <br><br>
            <input type="number" name="phone" placeholder="contact-number" class="form-control"> <br><br>
            <textarea name="addres" id="" cols="30" rows="10"></textarea><br><br>
            <input type="submit" name="submit" value="register" class="form-control"> <br><br>
            
        </form>
    </div>
</body>
</html>