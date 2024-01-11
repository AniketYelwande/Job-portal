<?php
  if(empty($_GET))
  {
     header("location:index.php");
  }


   $conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");
 
   $q="update jobs set j_active=1 where j_id=".$_GET['id'];

  echo $q;
 
    pg_query($conn,$q);

    pg_close($conn);

   header("location:verify.php");

 ?>
