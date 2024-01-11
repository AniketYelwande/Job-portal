<?php
	session_start();

	if(empty($_POST))
	{
	 exit;
	}

	if(empty($_POST['unm']) || empty($_POST['pwd']) || empty($_POST['cat']))
	{
	 echo "You Must Enterd All Fields";
	}

	if($_POST['cat']=='employee')
	{
	$conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");
	 $q="select * from employees where ee_fnm='".$_POST['unm']."'";

	 $res=pg_query($conn,$q) or die("Wrong Query");

	 $row=pg_fetch_assoc($res);

	 if(!empty($row))
	 {
 	  if($_POST['pwd']==$row['ee_pwd'])
	  {
	   $_SESSION=array();

	   $_SESSION['unm']=$row['ee_fnm'];
	   $_SESSION['ee_id']=$row['ee_id'];
           $_SESSION['cat']='employee';
	   $_SESSION['status']=1;
	   $_SESSION['employee']=1;

	   header("location:index.php");
	  }
	  else
	  {
	   echo "Wrong Password";
   	  }
   	 }
	else
	{
	 echo"No Such User";
	}
       }

	if($_POST['cat']=='employer')
	{
		echo "Hello Employer";
	 $conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");

         $q="select * from employers where er_fnm='".$_POST['unm']."'";

         $res=pg_query($conn,$q) or die("Wrong Query");

         $row=pg_fetch_assoc($res);
	
	 if(!empty($row))
	 {
	  if($_POST['pwd']==$row['er_pwd'])
	  {
	   $_SESSION=array();

	   $_SESSION['unm']=$row['er_fnm'];
           $_SESSION['eid']=$row['er_id'];
           $_SESSION['cat']='employer';
           $_SESSION['status']=1;
           $_SESSION['employer']=1;

           header("location:index.php");
	  }
	 else
	 {
	  echo "Wrong Password";
  	 }	
	}
	else
	{
	 echo"No Such User";
	}
}


?>
