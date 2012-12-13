<?php

include_once("config.php");
$conection = mysql_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD);
mysql_select_db(DB_DATABASE, $conection);

if(!$conection)
	die ("ERROR:".mysql_error());
?>