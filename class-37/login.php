<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login Page</title>
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
