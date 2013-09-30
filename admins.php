<?php

include('checkLogin.php');
if(isset($_POST['action']) && $_POST['action'] == 'login')
{
	include('conn.php');
	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	$sql = "SELECT id FROM admins WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql) or die('Error querying database.');
	$count = mysqli_num_rows($result);
	if($count >= 1)
	{
		$_SESSION['isLogin'] = 1;
		echo 1;
	}
	else
	{
		echo 0;
	}
	exit;
}
elseif(isset($_GET['action']) && $_GET['action'] == 'logout')
{
	session_destroy();
	header("Location:admin.php");
	exit;
}
else
{
	if(checkLogin())
	{
		header("Location: editArc.php");
	}
}

?>

<!DOCTYPE>
<html>
<head>
<title>Admin</title>
<meta charset="UTF-8">
<link href="Style3.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.8.3.min.js"></script>
</head>
<style>
body{text-align: center;}
</style>

<body>

<?php include('front_menu.php'); ?>
<h1>Please Login</h1>
<form>
<div><label>Username</label> <input name="username"> </div>
<div><label>Password</label> <input name="password" type="password"> </div>
<input type="hidden" name="action" value="login">
<input value="Login" type="button" onclick="login()">
</form>
<a href="admins.htm">Still don't have an account?</a>

<footer>@2013 Girl's generation.</footer>

</body>
</html>

<script>
	
var login = function (){
	$.post('admin.php',
	$('form').serialize(),
	function (isLogin){
		if(isLogin == 1){
			location.href = 'editArc.php';
		}
		else{
			alert('Please enter the correct username and password');
		}
	})
}

</script>
