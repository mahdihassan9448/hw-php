<?php
    $Host = 'localhost';
    $User = 'root';
    $Pass = '';
    $DB = 'students';

    $Connection = mysqli_connect($Host,$User,$Pass,$DB);

    if(!$Connection)
        echo 'connection is not connected';

        if(isset($_POST['submit']))
        {
            $name 		= $_POST['name'];
            $roll 		= $_POST['roll'];
            $phone 		= $_POST['phone'];
            $address 	= $_POST['address'];
    
            $Query = "INSERT INTO user(name, rool, phone, addres) VALUES('$name','$roll','$phone','$address')";
    
            $Result = mysqli_query($Connection,$Query);
    
            if($Result)
                echo "Data inserted Successfull!";
            else
                echo "Someting went wrong";
        }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Entry</title>
    </head>
    <body>
        <form action="index.php" enctype="multipart/form-data" method="POST">
 		    <label for="name">Name</label>
 		    <input type="text" name="name">
 		    <br>
 		    <label for="roll">Roll</label>
 		    <input type="text" name="roll">
 		    <br>
 		    <label for="phone">Phone</label>
 		    <input type="text" name="phone">
 		    <br>
 		    <label for="address">Address</label>
 		    <textarea name="address" id="address" cols="30" rows="10"></textarea>
            <br>
 		
 		<input type="submit" name="submit" value="Student Entry">

 	
        </form>
    </body>
    </html>