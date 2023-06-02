<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registration Page</title>
 <style>
    body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
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
    <div class="container">
        <h1>Registration Page</h1>
        <form action="register.php" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="confirm_password" placeholder="Confirm Password">
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>