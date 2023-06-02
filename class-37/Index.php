<!DOCTYPE html>
<html>
<head>
    <title>Web Application</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #222;
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
            color: #ccc;
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

    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li style="float: right;"><a href="login.php" class="button">Login</a></li>
            <li style="float: right;"><a href="registration.php" class="button">Registration</a></li>
        </ul>
    </div>

    <div class="content">
        <h1>Welcome to the Web Application</h1>
       <h3><i>This is the home page of our web application.</i></h3>
    </div>
</body>
</html>
  