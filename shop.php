<?php

include('conn.php');
$list = $conn->query('select id,price from shop');
$result = array();
while($row = $list->fetch_array(MYSQLI_ASSOC))
{
    $result[] = $row['price'];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
<title>Girl's Generation</title>
<link href="Style3.css" rel="stylesheet" type="text/css" />
</head>
<body id="page8">
    <?php include('front_menu.php'); ?>
	<div id="header">
	<h1>
		<strong> Girl's Generation </strong>
	</h1>
	<h2> Nine angels </h2>
	</div>
    <div>
        &nbsp;</div>
    <h3>
    The signature of all group members of girl's generation
    </h3>

<ul>

    <li>
    <del class="grey">CDN$ 39.99</del>
            <span class="bld lrg red"> CDN$ <?php echo $result[0]; ?></span>   
    </li>
	<li>
        <span class="grey sml">Order in the next </span>
        <span class='bld grn'>49 hours and get it by Wednesday, Aug 7</span>
        <img  src="280712-5th-anniversary-snsds-signature.jpg" width="133" height="90"  margin="50px"/></li>
</ul>
<select id="quantity" size="1">
<option>Quantity</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<button type="submit">Add to Cart</button>

    &nbsp;<div>
        &nbsp;</div>
    <h3>
    The New Ablums of Girl's Generation
    </h3>

<ul>

    <li>
    <del class="grey">CDN$ 29.99</del>
            <span class="bld lrg red"> CDN$ <?php echo $result[1]; ?></span>   
    </li>
	<li>
        <span class="grey sml">Order in the next </span>
        <span class='bld grn'>49 hours and get it by Wednesday, Oct 1</span>
        <img  src="Images/SNSD Tell Me Your Wish Yoona Cover.jpg" width="150" height="90" /></li>
</ul>
<select id="quantity" size="1">
<option>Quantity</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<button type="submit">Add to Cart</button>


    <div>
        &nbsp;</div>
    <h3>
    The Posters of Girl's Generation
    </h3>

<ul>

    <li>
    <del class="grey">CDN$ 19.99</del>
            <span class="bld lrg red"> CDN$ <?php echo $result[2]; ?></span>   
        <img  src="Images/SNSD Genie Japanese Album.jpg" width="150" height="90" /></li>
	<li>
        <span class="grey sml">Order in the next </span>
        <span class='bld grn'>49 hours and get it by Wednesday, Oct 1</span>
    </li>
</ul>
<select id="quantity" size="1">
<option>Quantity</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<button type="submit">Add to Cart</button>


    <div>
        &nbsp;</div>
    <h3>
    The Clothes of Girl's Generation
    </h3>

	<p>
        <img  src="Images/snsd-454.jpg" width="150" height="90" /></p>

<ul>

    <li>
    <del class="grey">CDN$ 79.99</del>
            <span class="bld lrg red"> CDN$<?php echo $result[3]; ?></span>   
    </li>
	<li>
        <span class="grey sml">Order in the next </span>
        <span class='bld grn'>49 hours and get it by Wednesday, Oct 1</span>
    </li>
</ul>
<select id="quantity" size="1">
<option>Quantity</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<button type="submit">Add to Cart</button>


		<div id="footer">
			<p>&copy;2013 Girl's generation.</p>
		</div>
</body>
</html>
