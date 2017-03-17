<?php
$connection = mysql_connect('localhost','root','my_dbpass');

$db = mysql_select_db("project_1",$connection);
session_start();
$user_check = $_SESSION['login_user'];
$ses_sql = mysql_query("select username from register where username = '$user_check'",$connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['username'];
if(!isset($login_session)){
	mysql_close($connection);
	//header('location:login1.php');
}
?>