<?php

include('checkLogin.php');
if(!checkLogin())
{
	header("Location: admin.php");
}

if(isset($_POST['action']) && isset($_POST['action']) == 'save')
{
	include('conn.php');
	$id = $_POST['id'];
	$price = $_POST['price'];
	foreach($id as $k => $v)
	{
		$sql = "update shop set price='".$price[$k]."' where id=".$id[$k];
		$conn->query($sql);
	}
	exit;
}
else
{
	include('conn.php');
	$list = $conn->query('select id,title from article');
	$shop = $conn->query('select * from shop');
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
form{text-align:left; width:900px; margin:0 auto;}
</style>

<body>
<?php include('admin_menu.php'); ?>
<h1>Edit Price</h1>
<form>
	<?php while($row = $shop->fetch_array(MYSQLI_ASSOC)){ ?>
	<div><label><?php echo $row['name']; ?>:</label> <input name="price[]" value="<?php echo $row['price']; ?>"> </div>
	<input type="hidden" name="id[]" value="<?php echo $row['id']; ?>">
	<?php } ?>
	

	<input type="hidden" name="action" value="save">
	<input value="Save" type="button" onclick="save()">
</form>

<footer>@2013 Girl's generation.</footer>
</body>
</html>

<script>
	
var save = function (){
	$.post('editShop.php',
	$('form').serialize(),
	function (id){
		alert('save success');
		location.reload();
	})
}

</script>
