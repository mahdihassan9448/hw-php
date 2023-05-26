<?php
    include('cunnection.php');

    $Query ="SELECT * FROM user";
    $Result = mysqli_query($connection,$Query);

    

?>


<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Student List</title>
 </head>
 <body>

 	<table>
 		<thead>
 			<tr>
 				<th>ID</th>
 				<th>Name</th>
 				<th>$Email</th>
 				
 			</tr>
 		</thead>

 		<tbody>
			<?php while($Row = mysqli_fetch_assoc($Result))
            { ?>
				<tr>
                    <td><?php  echo $Row['id']; ?></td>
					<td><?php  echo $Row['name']; ?></td>
					<td><?php  echo $Row['email']; ?></td>
					
					<td>
						<button>Edit</button>
						<button>Delete</button>
					</td>
				</tr>
 			<?php } ?>
 		</tbody>
 	</table>
 </body>
 </html>