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
    <h1>Login <small>Slash-KART</small></h1>
</div>

<!-- Login page -->
<?php

session_start();
require('login.php'); 

if(isset($_POST['submit'])){
	$uname = $_POST['username'];
	$pass1 = $_POST['pass'];
	
	
	//$pass1 = md5($pass1);
	
	$sql = mysql_query("SELECT * FROM register WHERE username = '$uname' AND pass = '$pass1'");
	if(mysql_num_rows($sql) > 0){
		$_SESSION['login_user']=$uname;
		header("location:home.php");
		//echo "You are logged in";
		//exit();
	}else{
		
		echo "Wrong username/password combination.<br /> ";
	}
}
else {
	$form = <<<EOT
	<div class="container" id="container1">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Please Login</h3>
					</div>
                    <div class="panel-body">
	
	<form action = "login1.php" method="POST">
	<div class="form-group">
	<input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username">
	</div>
	<div class="form-group">
	<input type="password" name="pass" id="pass" class="form-control input-sm" placeholder="Password">
	</div>
	<div class="form-group">
	<input type="submit" value="Login" name="submit" class="btn btn-info btn-block" ></br>
	</form>
	<!-- <div class="panel-body"> -->
	 <form action = "form.php">
	 <div class = "form-group">
	 <input type ="submit" value="New user? Register Here" name = "submit" class="btn btn-info btn-block" >
	 </div>
	<!-- </div> -->
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>

EOT;

echo $form;	

}
?>
</body>
</html>