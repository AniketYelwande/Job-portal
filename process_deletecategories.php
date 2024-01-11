<?php
	session_start();

	if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
	{
	  header("location:../index.php");
	}

	if(empty($_POST))
	{
	 exit;
	}

	$msg=array();

	if(empty($_POST['name']))
	{
	 $msg[]="One of the Field is Empty";
	}

	if(!empty($msg))
	{
	 echo "<b>Errors:</b><br>";
	 foreach($msg as $k)
	 {
	  echo "<li>".$k;
	 }
	}
	else
	{
	 $conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");
	 $name=$_POST['name'];

	 $q="delete from categories where cat_nm='$name'";

	 pg_query($conn,$q) or die("Query Failed");

	 pg_close($conn);

	 header("location:category.php");
	}
?>
