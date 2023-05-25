<?php
    $Host = 'localhost';
    $Name = 'root';
    $password = '';
    $DB = 'mahdi';

    $connection = mysqli_connect($Host,$Name,$password,$DB);
    if($connection)
        echo 'connection is succsess';
    else
        echo 'connection is not succsess'; 


    if(isset($_POST ['submit'])){
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $password = $_POST['password'];
       
        $Query = "INSERT INTO user(name,email,password) 
         VALUES('$Name','$Email','$password')";

        $Rasult = mysqli_query($connection,$Query);
        if($Rasult){
            echo "data insertion successfull";
        }
        else{
            "data insertion is not successfull";
        }
        
    } 
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <h1>Register Form</h1>
        <form action="Register.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="name"><br><br>
            <input type="email" name="email" placeholder="email"><br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <input type="submit" name="submit" value="submit">

        </form>

    </div>
    
</body>
</html>