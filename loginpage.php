<?php
require('login.php');

if(isset($_POST['submit'])){
	$uname = $_POST['username'];
	$pass1 = $_POST['pass'];
	
	$sql = mysql_query("SELECT * FROM register WHERE username = '$uname' AND pass = '$pass1'");
	if(mysql_num_rows($sql) > 0){
		
		echo "You are logged in.";
		exit();
	}else{
		
		echo "Wrong username/password combination. ";
	}
}
else{
		
		$form = <<<EOT
		<form action = "loginpage.php" method="POST">
		Username : <input type = "text" name="username" /><br />
		Password : <input type ="password" name ="pass" /><br />
		<input type ="submit" name="submit" value="Login" />
		</form>
		EOT;
		echo $form;
	
	}
?>	