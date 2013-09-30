<?php
require_once ('header.php');
?>

<html>
<head>
<title>girl's generation</title>
</head>

<body>


<?php


	$sql = "SELECT * FROM admins;";
	
	
	$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200223797', '891015', 'db200223797') or
		die(mysqli_error());
		

	$result = mysqli_query($conn, $sql);
	

	
	echo '<table border="1"><tr><th>USERNAME</th><th>EMAIL</th><th>Edit</th><th>Delete</th></tr>';
	
	while ($row = mysqli_fetch_array($result)) {
		echo '<tr>
			  <td>' . $row['username'] . '</td>
			  <td>' . $row['email'] . '</td>
			  <td><a href="admins.php?id='. $row['id'] . '">Edit</a></td>
			  <td><a href="delete.php?id='. $row['id']. ' " onClick="return  confirm(\'Are you sure?\');">Delete</a></td>
              </tr>';
	}
	
	//6. close the table
	echo '</table>';
	
	//7. disconnect
	mysqli_close($conn);
	
?>
<div>
<a href="admins.htm">Still don't have an acount??</a>
</div>

<div>
<a href="logout.php">Log out</a>
</div>

<p>
Have a good day!</p>

</body>

</html>
<?php
require_once ('footer.php');
?>
