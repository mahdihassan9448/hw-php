<?php
    include('Connection.php');
    $Query = "SELECT * FROM user";
    $Rasult = mysqli_query ($Connection,$Query);
    
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
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Rool</th>
                <th>Phpne</th>
            </tr>
        </thead>
        <tbody>
            <?php while($Row = mysqli_fetch_assoc($Rasult))
            { ?>
                <tr>
                    <td><?php echo $Row['id']; ?></td>
                    <td><?php echo $Row['name']; ?></td>
                    <td><?php echo $Row['rool']; ?></td>
                    <td><?php echo $Row['phone']; ?></td>

                    <td>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
            <?php
            }?>    
        </tbody>
    </table>
</body>
</html>