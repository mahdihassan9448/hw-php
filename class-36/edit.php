<?php
    include('Connection.php');

     if(isset($_REQUEST['action'])) {
        if($_REQUEST['action'] == 'edit') {
            $id = $_REQUEST['id'];

            $Query = "SELECT * FROM students WHERE id = $id LIMIT 1";

            $Result = mysqli_query($Connection,$Query);
            $Result = mysqli_fetch_assoc($Result);
            
        }
       
        if($_REQUEST['action'] == 'update'){
            $id = $_REQUEST['id'];

            $name =  $_POST['name'];
			$roll =  $_POST['roll'];
			$phone =  $_POST['phone'];
			$address =  $_POST['address'];

            $Query = "UPDATE students SET name = '$name', roll = '$roll', phone = '$phone', address = '$address'
            WHERE id = $id";

        $Result = mysqli_query($Connection, $Query);
        if ($Result) {
            echo "Updated Successfully !";
        }
        else{
            echo "Something went wront while updating data";
        }

        $Query = "SELECT * FROM students WHERE id = $id LIMIT 1";

            $Result = mysqli_query($Connection,$Query);
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
    <title>Edit students</title>
</head>
<body>

        <form action="edit.php?action=update&id=<?php echo  $Result['id'];?>" enctype="miltipart/form-data" 
        method="POST">
            
            <input type="text" name="name" value="<?php echo $Result['name']; ?>"> <br><br>
            <input type="numbrr" name="roll" value="<?php echo $Result['roll']; ?>"> <br><br>
            <input type="number" name="phone"  value="<?php echo $Result['phone']; ?>"> <br><br>    
            <textarea name="address" id="" cols="30" rows="10"><?php echo $Result['address'];?></textarea><br><br>
            <input type="submit" name="submit" value="update student"> <br><br>

        </form>
    
</body>
</html>