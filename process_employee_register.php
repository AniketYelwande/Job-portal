<?php
 
    if(!(strtoupper(substr($_FILES['resume']['name'],-4))=='.DOC'))

   {
     echo "Wrong File Type";
   }
   
    if(empty($_POST))
   {
      exit;
   }

    $msg=array();
   /* if(empty($_POST['nm']) || empty($_POST['gender']) || empty($_POST['email']) || empty($_POST['addr']) || empty($_POST['ph']) || empty($_POST['mobile']) || empty($_POST['cl']) || empty($_POST['cas']) || empty($_POST['cindustry']) || empty($_POST['quali']) || empty($_POST['profile']) || empty($_POST['pwd']))

   {
      $msg[]="one of your field is empty";
    
   }
 */
   if(strlen($_POST['pwd'])<6)
   {
     $msg[]= "please enter atlist 6 digit password";
   }
    if(strlen($_POST['ph'])!=10)
   {
     $msg[]="please enter 10 digit number";
   }
    if(strlen($_POST['mobile'])!=10)

   {
    $msg[]="please enter 10 digit number";
   }
   if(!is_numeric($_POST['cas']))

   {
     $msg[]="only numeric valueis valid";
   }

   if(empty($_FILES['resume']['name']))
  
   {
     $msg[]="plz select a file";
   }
  
   if($_FILES['resume']['error']>0)
   {
     $msg[]="error uploading file";
   }
  
   if(file_exists("uploads/".$_FILES['resume']['name']))

   {
     $msg[]="this file is already uploaded.";
   }


 /*  if(!(strtoupper(substr($_FILES['resume']['name'],-4))=='.DOC'));

   {
     $msg[]="wrong file type";
  }
 */ 
   if(!empty($msg))

    {
     echo "<b> errors:</b><br>";
     foreach($msg as $k)
     {
       echo"<li>".$k;
    }
  }
  else

   {
    
      $conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");


         $nm=$_POST['nm'];
         $gender=$_POST['gender'];
	 $email=$_POST['email'];
	 $addr=$_POST['addr'];
	 $ph=$_POST['ph'];
	 $mobile=$_POST['mobile'];
	 $cl=$_POST['cl'];
	 $cas=$_POST['cas'];
	 $cindustry=$_POST['cindustry'];
	 $quali=$_POST['quali'];
	 $profile=$_POST['profile'];
	 $pwd=$_POST['pwd'];
         move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']);
        
        $path="uploads/".$_FILES['resume']['name'];

/*
	echo $nm."<br>";
	echo $pwd."<br>";
	echo $gender."<br>";
	echo $email."<br>";
	echo $addr."<br>";
	echo $ph."<br>";
	echo $mobile."<br>";
	echo $cl."<br>";
	echo $cas."<br>";
	echo $cindustry."<br>";	
	echo $quali."<br>";
	echo $profile."<br>";
	echo $path."<br>";

*/
	//echo $_FILES['resume']['name'];

        $q="insert into employees(ee_resume,ee_pwd,ee_fnm,ee_gender,ee_email,ee_add,ee_phn,ee_mobileno,ee_current_location,ee_annualsalary,ee_current_industry,ee_qualification,ee_profile) values  ('$path','$pwd','$nm','$gender','$email','$addr','$ph','$mobile','$cl','$cas','$cindustry','$quali','$profile')";
   	//echo $q;
         pg_query($conn,$q) or die ("wrong query");
         pg_close($conn);
  
        header("location:index.php");
   }

 ?>
   

