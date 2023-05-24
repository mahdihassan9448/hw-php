<?php
        $host = 'localhost';
        $name = 'root';
        $pass = '';
        $db = 'wd2';
    
        $connection = mysqli_connect($host, $name,$pass,$db);
    
        if(!$connection){
            echo "Connection Failed !";
        }
    
    
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $password = sha1($_POST['password']);

           echo $query = "INSERT INTO user( name, password) VALUES ('$name','$password')";

            $result = mysqli_query($connection,$query);

            if($result){
                echo "Login Successfully";
            }else{
                echo "Login Failed !";
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
</head>
<body>
    <div class="wrapper">
        <h1>Loging</h1>
        <form action="loging.php" method="post" enctype="multipart/form-data">
            <input type="text" name="password" placeholder="user-name"><br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <input type="submit" name="submit" value="submit">

        </form>
    </div>
    
</body>
</html>