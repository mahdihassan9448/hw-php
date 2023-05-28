<?php
    include('Connection.php');

    if (isset($_REQUEST['a'])) 
    {
		$id = $_REQUEST['id'];

		$Query = "DELETE FROM user where id = $id";

		$Result = mysqli_query($Connection, $Query);

		if ($Result) {
			echo "Data Deleted Successfully ";
		}
		else
		{
			echo "Something went wrong ";
		}
	}

    $Query = "SELECT * FROM user";
    $Result = mysqli_query ($Connection,$Query);
    
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <a href="indx.php">Home</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Rool</th>
                <th>Phpne</th>
            </tr>
        </thead>
        <tbody>
            <?php while($Row = mysqli_fetch_assoc($Result))
            { ?>
                <tr>
                    <td><?php echo $Row['id']; ?></td>
                    <td><?php echo $Row['name']; ?></td>
                    <td><?php echo $Row['rool']; ?></td>
                    <td><?php echo $Row['phone']; ?></td>

                    <td>
                        <a href="">Edet</a>
                        <a href="list.php?action=ddelet&id=<?php echo $Row['id']; ?>">Delet</a>     
                    </td>
                </tr>
            <?php
            }?>    
        </tbody>
    </table>
</body>
</html>