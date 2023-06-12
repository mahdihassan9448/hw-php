<?php
  include('connection.php');

  if(isset($_POST['submit'])) {
    if($_POST['submit'] == 'Register') {
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];

      if($password == $confirm_password){
         $Query = "INSERT INTO user (name, phone, email, password )
          VALUES ('$name', '$phone', '$email', '$password')";
        $Result = mysqli_query($Connection, $Query);
      

        if($Result){
          echo"new user create success";
        }
        else{
          echo "not create user";
        }

      }
      else{
        echo "password is not correct";
      }
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registration Page</title>
 <style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

.navbar {
   background-color: #4CAF50;
   padding: 10px;
  }

/* .navbar ul {
    margin: 0;
    padding: 0;
  } */

.navbar li {
    display: inline;
    margin-right: 10px;
  }

.navbar a {
    color: #fff;
    text-decoration: none;
    padding: 10px;
  }

.navbar a:hover {
    background-color: #777;
  }

.content {
    padding: 30px;
  }

.button {
    font-size: 16px;
    margin: 5px 3px;
 }

.container {
  width: 500px;
  margin: 0 auto;
}

input {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 3px solid #777;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
}
input[type="text"], input[type="number"], input[type="email"], input[type="password"], input[type="submit"] {
      border-radius: 20px;
    }


</style>
</head>
<body>
<div class="navbar">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li style="float: right;"><a href="login.php" class="button">Login</a></li>
    </ul>
  </div>
  <div class="container">
       <h1>Registration Page</h1>
          <form action="Registration.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Name">
            <input type="number" name="phone" placeholder="Phone">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="confirm_password" placeholder="Confirm Password">
            <input type="submit" name="submit" value="Register">
          </form>
    </div>
</body>
</html>