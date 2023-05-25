<?php
    $host = 'localhost';
    $name = 'root';
    $pass = '';
    $db = 'wd2';

    $connection = mysqli_connect($host, $name,$pass,$db);
    
    if(!$connection)
        echo "Connection Failed !";
    


    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $number = $_POST['number'];

        $query = "INSERT INTO user( name, email, password, number) VALUES ('$name','$email','$password','$number')";

        $result = mysqli_query($connection,$query);
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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h1>Register</h1>
        <form action="Cunnection.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="name"><br><br>
            <input type="email" name="email" placeholder="email"><br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <input type="int" name="number" placeholder="phon-number"><br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>
</html>