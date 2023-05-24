<?php
    $Host = 'localhost';
    $name = 'root';
    $password = '';
    $DB = 'mahdi';

    $conection = mysqli_connect($Host,$Name,$password,$DB);
    if($connection)
        echo 'connection is succsess';
    else
        echo 'connection is not succsess';


    // if(isset($_POST ['submit'])){
    //     $Name = $_POST['name'];
    //     $Email = $_POST['email'];
    //     $password = sha1( $_POST['password']);
    //     // $Number = $_POST['number'];

    //     $Query = "INSERT INTO users (name,email,password) 
    //      VALUES ('$Name',$Email,'$Password')";

    //     $Rasult = mysqli_query($conection,$Query);
    //     if($Rasult){
    //         echo "data insertion successfull";
    //     }
    //     else{
    //         "data insertion is not successfull";
    //     }
        
    // } 
    
?>

<!-- 
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
        <form action="register.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="name"><br><br>
            <input type="email" name="email" placeholder="email"><br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <input type="submit" name="submit" value="submit">

        </form>

    </div>
    
</body>
</html> -->