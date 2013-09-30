
<?php
require_once ('header.php');
?>
<html>
<head>
<title>girl's generation</title>
</head>
<body>
<?php



$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200223797', '891015', 'db200223797') or die('Error connecting to MySQL server.');
	//grab the selected id # from the url using GET
  $id = $_GET['id'];
  $sql = "SELECT * FROM admins WHERE id=$id";
  $result = mysqli_query($conn, $sql) or die('Error querying database.');

  while ($row = mysqli_fetch_array($result)) {
	$username = $row['username'];
	$email = $row['email'];
	$id = $row['id'];
  } 

  mysqli_close($conn);
?>

<form method="post" action="update_users.php">

<div>
	<label>username</label>
	<input name="username" value="<?php echo $username; ?>" />
</div>
<div>
	<label>email</label>
	<input name="email" value="<?php echo $email; ?>" />
</div>
<DIV><LABEL>New Password</LABEL> <INPUT name=password type=password> </DIV>


<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" value="Save" />

</form>
<p>
Have a good day!</p>
</body>

</html>
<?php
require_once ('footer.php');
?>
