<?php

	if(empty($_POST))
	{
	 exit;
	}

	$msg=array();

	if(empty($_POST['nm']) || empty($_POST['email']) || empty($_POST['query']))
	{
	 $msg[]="One Of You'r Field Is Empty";
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

	 $nm=$_POST['nm'];
	 $email=$_POST['email'];
	 $query=$_POST['query'];

	 $q="insert into contact(cont_fnm,cont_email,cont_query)values('$nm','$email','$query')";

	 pg_query($conn,$q)or die("Wrong Query");


	echo"<script> alert(you'r query submitted successfully!)</script>";

	pg_close($conn);

	header("location:index.php");
	}

?>
