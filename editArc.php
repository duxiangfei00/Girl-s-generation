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
	$title = mysql_escape_string($_POST['title']);
	$content = mysql_escape_string($_POST['content']);
	$sql = "update article set title='".$title."', content='".$content."' where id=".$id;
	$conn->query($sql);
	echo $id;
	exit;
}
else
{
	include('conn.php');
	$list = $conn->query('select id,title from article');
	$id = (int)$_GET['id'];
	$id = ($id == '') ? 1 : $id;
	$article = $conn->query('select * from article where id='.$id);
	$article = $article->fetch_array(MYSQLI_ASSOC);
}

?>

<!DOCTYPE>
<html>
<head>
<title>Admin</title>
<meta charset="UTF-8">
<link href="Style3.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/xheditor-1.2.1.min.js"></script>
</head>
<style>
body{text-align: center;}
form{text-align:left; width:900px; margin:0 auto;}
</style>

<body>
<?php include('admin_menu.php'); ?>
<h1>Edit Article</h1>
<form>
	<div><label>Title</label> <input name="title" value="<?php echo $article['title']; ?>"> </div>
	<div><label>Content</label> <textarea id="elm1" name="content" class="xheditor" style="width:800px;height:600px;"><?php echo $article['content']; ?></textarea></div>
	<input type="hidden" name="action" value="save">
	<input type="hidden" name="id" value="<?php echo $article['id']; ?>">
	<input value="Save" type="button" onclick="save()">
</form>

<footer>@2013 Girl's generation.</footer>
</body>
</html>

<script>
	
var save = function (){
	$.post('editArc.php',
	$('form').serialize(),
	function (id){
		alert('save success, go to the new page.');
		location.href = 'default.php?id='+id;
	})
}

</script>
