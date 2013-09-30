<?php
include('conn.php');

$id = (int)$_GET['id'];
$id = ($id == '') ? 1 : $id;
$result = $conn->query('select * from article where id='.$id);
$row = $result->fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link href="Style3.css" rel="stylesheet" type="text/css">
		<title><?php echo $row['title']; ?></title>
	</head>
<body id="page1">
	<?php include('front_menu.php'); ?>
	<a href ="default.php?id=1"><img alt="girlicons" src="Images/CJyIhci.png" height="258" width="417" /></a>
	<header>
		<h1>
			<strong><?php echo $row['title']; ?></strong>
		</h1>
	</header>
	<div id="content">
		<?php echo $row['content']; ?>
		</div>
	  <a href="admin.php" id="header" class="newStyle5">admin</a>
	  
	<footer>
	
		<p>&copy;2013 The Girl's Generation Group.</p>
	</footer>
</body>
</html>
