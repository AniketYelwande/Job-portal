<?php session_start();
if(!(isset($_SESSION['status'])&& $_SESSION['unm']=='admin'))
  {
     header("location:../index.php");
  }

 ?>

   <html>
    <head>
   
  <?php
   include("includes/head.inc.php");
  ?>
  </head>
  <body>
  <div id="header-wrapper">
  	<div id="header">
  	<div id="menu">
  		<?php
  			include("includes/menu.inc.php");
  		?>
  	</div>
 	 <!--end #menu-->
  
	<div id="search">
		  <?php
		   include("includes/search.inc.php");
		  ?>
	 </div>
	   <!--end #search-->
	</div>
 </div>
	<!--end #header-->
	 <!--end #header-wrapper-->

	 <div id="logo">
		  <?php
		    include("includes/logo.inc.php");
  		  ?>
	 </div>
	
	 <div id="wrapper">
	   <div id="page">
  		<div id ="page-bgtop">
 		 <hr />
 
 		 <div id="content">
 		 <div class="post">
 		
 			 <h2 class="title"><center>ADD category </center></h2>
 	
 			 <p class="meta"></p>
 			 <div class="entry">
 	
			 <form action="process_addcategories.php"method="POST">
			<center> Name <input type="text"name="nm">
			              <input type="submit"value="ok"> </center>
   			 </form>
  			 </div>
			 </div>

			<center> <h2 class="title">Delete category</h2> <center>
			   <p class="meta"></p>
			   <div class="entry">
    			
				<form action="process_deletecategories.php"method="POST">
				name<html>   <select name="name" style="width:150px;">
			
			   <?php

			   $conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");
	
			   $q="select * from categories";
 
			   $res=pg_query($conn,$q)or die('wrong query');
	

  			   while($row=pg_fetch_assoc($res))
   			   {
 				 echo"<option>".$row['cat_nm'];
    			   }
   		            ?>	
			  </select>
			 </html> 
				 <input type="submit"value="ok">
 			  </form>
			  </div>	
			 </div>	
			</div>
 				<!--end #content-->
 
   <!--end #sidebar-->
 
  <div style="clear:both;">&nbsp;</div>
   </div>
 </div>
 </div>
 <!--end #page-->
  <div id="footer-bgcontent">
  <div id="footer">
  <?
  include("includes/footer.inc.php");
 ?>
  </div>
 </div>
 <!--end #footer-->
  </body>
   </html>



 
