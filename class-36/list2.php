<?php
    include('Connection.php');

    if (isset($_POST['submit'])) {
        if($_POST['submit'] == 'delete') {
           $id =$_POST['id'];

           $Query =" DELETE FORM user Where id = $id";

           $Rasult = mysqli_query($Connection,$Query);

            if($Rasult) {
                echo "Delete success full";
            } 
            else "somthig is eorng";
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
    <a href="index.php">Home</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Rool</th>
                <th>Phpne</th>
                <th>Action</th>
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
                        <form action="list2.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $Row['id']; ?>">
                            <input type="submit" name="submit" value="Delete">
                        </form>     
                    </td>
                </tr>
            <?php
            }?>    
        </tbody>
    </table>
</body>
</html>