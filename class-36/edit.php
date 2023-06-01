<?php
	include('Connection.php');

	if (isset($_REQUEST['action']))
	{
		if ($_REQUEST['action'] == 'edit')
		{ 
			 $id = $_REQUEST['id'];

			 $Query = "SELECT * FROM user WHERE id = $id LIMIT 1 ";

			$Result = mysqli_query($Connection ,$Query);
			$Result = mysqli_fetch_assoc($Result);
		
		}
	}

	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Enty</title>
</head>
<body>
<form > 		
<input type="text" name="name" placeholder="name" class="form-control"> <br><br>
            <input type="numbrr" name="rool" placeholder="rool" class="form-control"> <br><br>
            <input type="number" name="phone" placeholder="contact -number" class="form-control"> <br><br>
            <textarea name="addres" id="" cols="30" rows="10"></textarea><br><br>
            <input type="submit" name="submit" value="register" class="form-control"> <br><br>

 	</form>
</body>
</html>
