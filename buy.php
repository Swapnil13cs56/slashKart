<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registration Form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<div class="page-header">
    <h1>Your cart <small>Slash-KART</small></h1>
</div>

<!-- Registration Form - START -->
<?php 
include('session.php');
require('login.php');

	//perform verification
	
	//$name_item = $_POST['item_name'];
	//$price_item = $_POST['item_price'];
	//$discount_item = $_POST['discount'];
	$result = mysql_query("select * from item_list where item_name = 'iphone6s'");
	while ($row = mysql_fetch_object($result)) {
    $price = $row->item_price;
    $disc =  $row->discount;
	echo $disc;
	echo $price;
	$got_at_this = ($disc/100)*$price;
	echo $got_at_this;
	
	}
	mysql_free_result($result);
		
		//$query = mysql_query("SELECT * FROM item_list WHERE item_name = 'iphone6s'");
		
		
	

?>
</body>
</html>