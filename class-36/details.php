<?php
   include ('Connection.php');

    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == 'details'){
           $id = $_REQUEST['id'];

            $Query = "SELECT * FROM students WHERE id = $id LIMIT 1";

            $Que = $Result = mysqli_query( $Connection,$Query );
            $Result = mysqli_fetch_assoc( $Result );

        }
    }

    if(isset($Result)) {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>attribute</th>
                <th>value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID</td>
                <td> <?php echo $Result ['id']; ?> </td>
            </tr>
            <tr>
                <td>Name</td>
                <td> <?php echo $Result ['name']; ?> </td>
            </tr>
            <tr>
                <td>Roll</td>
                <td> <?php echo $Result ['roll']; ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td> <?php echo $Result ['phone']; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td> <?php echo $Result ['address']; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
<?php } ?>