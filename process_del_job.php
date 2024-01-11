<?php
	if(empty($_GET))
	{
	 header("location:index.php");
	}

	$conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");

	$q="delete from jobs where j_id=".$_GET['id'];

	pg_query($conn,$q);

	header("location:manage.php");


?>
