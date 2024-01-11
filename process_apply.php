<?php
	session_start();

	if(empty($_GET))
	{
	 header("location:index.php");
	}
	
	$conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");

	$q="insert into applicants(a_uid,a_jid)values(".$_SESSION['ee_id'].",".$_GET['jid'].")";

	echo $q;

	pg_query($conn,$q) or die("Wrong Query");

	header("location:index.php");


?>
