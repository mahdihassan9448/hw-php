<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login Page</title>
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
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
}
  </style>
</head>
<body>
<div class="navbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li style="float: right;"><a href="registration.php" class="button">Registration</a></li>
    </ul>
  </div>
  <div class="container">
    <h1>Login Page</h1>
    <form action="login.php" method="post">
        <input type="text" name="name" placeholder="Name" class="round-border"><br><br>
        <input type="email" name="email" placeholder="Email" class="round-border"><br><br>
        <input type="password" name="password" placeholder="Password" class="round-border"><br><br>
        <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
