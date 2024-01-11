<?php
	$conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");

	if(!$conn)
	{
	 echo "\nError: Unable to open Database";
	}
	else
	{
	 echo "\nOpened Database Sucessfully";
	}
?>
