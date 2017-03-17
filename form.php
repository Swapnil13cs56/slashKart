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
    <h1>Registration Form <small>Slash-KART</small></h1>
</div>

<!-- Registration Form - START -->
<?php 
require('login.php');

if(isset($_POST['submit'])){
	
	//perform verification
	
	$email_id1 = $_POST['email1'];
	$email_id2 = $_POST['confirm_email'];
	$pass1 = $_POST['pass'];
	$pass2 = $_POST['confirm_pass'];
	
	if($email_id1 == $email_id2){
		if($pass1 == $pass2){
			
			$uname = $_POST['username'];
			$fname = $_POST['first_name'];
			$lname = $_POST['last_name'];
			$bday = $_POST['birthday'];
			$email_id1 = $email_id1;
			$email_id2 = $email_id2;
			$pass1 = $pass1;
			$pass2 = $pass2;
			
			//$pass1 = md5($pass1);
			
		$sql =  mysql_query("SELECT * FROM register WHERE username = '$uname'");
			if(mysql_num_rows($sql) > 0){
				echo "Sorry, that user already exists. ";
				exit();
			}
		
		mysql_query("INSERT INTO register(username,first_name,last_name,birthday,email1,pass) VALUES ('$uname','$fname','$lname','$bday','$email_id1','$pass1')");	
		}
		else{
			echo "Sorry your password do not match .<br />";
			exit();
		}
	}else{
		echo "Sorry your email id do not match. <br />";
	}
	echo "Registration Successful";
	echo '<img src = "project-images/regsuc.jpg">';
	echo "<p><a href='login1.php'>Login</a></p>";
	
}
else {
	
	$form = <<<EOT
	<div class="container" id="container1">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Please Register</h3>
                    </div>
                    <div class="panel-body">
	<form action = "form.php" method="POST">
	<div class="form-group">
	 <input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username">
	</div>
	<div class="form-group">
	 <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
	</div>
	<div class="form-group">
	<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
	</div>
	<div class="form-group">
	<input type ="date" name ="birthday" id="birthday" class="form-control input-sm" min="1947-01-01" placeholder="Birthday" >
	</div>
	<div class="form-group">
	<input type="email" name="email1" id="email1" class="form-control input-sm" placeholder="Email Address">
	</div>
	<div class="form-group">
	 <input type="email" name="confirm_email" id="confirm_email" class="form-control input-sm" placeholder="Confirm Email">
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="password" name="pass" id="pass" class="form-control input-sm" placeholder="Password">
	</div></div>
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="password" name="confirm_pass" id="confirm_pass" class="form-control input-sm" placeholder="Confirm Password">
	</div></div>
	<div class="form-group">
	<input type="submit" value="Enter ME" name="submit" class="btn btn-info btn-block" >
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