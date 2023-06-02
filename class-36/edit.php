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
	<input type="text" name="name" placeholder="name" > <br><br>
	<input type="text" name="name" value="<?php echo $Result['name']; ?>"><br><br>
    <input type="numbrr" name="roll" value="<?php echo $Result['roll']; ?>"><br><br>
    <input type="number" name="phone"  value="<?php echo $Result['phone']; ?>"><br><br>    
    <textarea name="addres" id="" cols="30" rows="10"><?php echo $Result['addres']; ?></textarea><br><br>
    <input type="submit" name="submit" value="update student" class="form-control"><br><br>


 	</form>
</body>
</html>
