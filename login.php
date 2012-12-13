<?php
	session_start();
	
	include_once("connection.php");
	
	$username = $_REQUEST["username"];
	$password = $_REQUEST["password"];
	
	$login = mysql_query("SELECT username, password FROM register WHERE username = BINARY '$username' AND password = BINARY '$password'");
	
	$num = mysql_num_rows($login);
	
	if($num!=0){
		while($num = mysql_fetch_assoc($login)){
			echo "Anda telah login sebagai $username";
		}
	}
	else{
		echo "Incorrect username or password";
	}
?>