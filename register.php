<?php
	include_once("connection.php");
	
	$username = $_REQUEST["username"];
	$password = $_REQUEST["password"];
	
	$register = mysql_query("INSERT INTO register(username, password) VALUES('$username', '$password')");
	
	if($register){
		echo "Welcome, $username.";
	}
	
	mysql_close($con);
?>