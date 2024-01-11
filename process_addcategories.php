<?php session_start();
if(!(isset($_SESSION['status'])&& $_SESSION['unm']=='admin'))
  {
     header("location:../index.php");
   }
   if(empty($_POST))
    {
     exit;
   }

  $msg=array();
     if(empty($_POST['nm']))
    {
       $msg[]="one of the field is empty";
     }

    if(!empty($msg))
   {
   echo"<b>Errors:</b><br>";
   foreach($msg as $k)
   {
       echo"<li>".$k;
   }
 }
 else
  {
      $conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");
	
      $nm=$_POST['nm'];      
      $q="insert into categories(cat_nm)values('$nm')";
 
 	pg_query($conn,$q)or die("wrong query");
  	pg_close($conn);
  
	header("location:category.php");
}

?>
