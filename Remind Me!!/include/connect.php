<?php
	require("config.php");
	$connection=mysql_connect(db_server, db_user, db_pass);
	if(!$connection)
	{
	die("Database Connection failed".mysql_error());
	}

	$db_select=mysql_select_db(db_name,$connection);
	if(!$db_select)
	{
	die("Database Selection failed".mysql_error());
	}
	session_start();
?>
