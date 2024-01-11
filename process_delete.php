<?php
	session_start();

	if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
	{
	  header("location:../index.php");
	}

	$conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");

	$q="delete from contact where cont_fnm='".$_GET['cat']."'";

	pg_query($conn,$q) or die("query Failed");

	pg_close($conn);
	
	header("location:contact.php");

?>
