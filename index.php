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
    </div>
 	 <!--end #header-->
	 <!--end #header-wrapper-->
 	
	<div id="logo">
	 <?php
	 include("includes/logo.inc.php");
 	 ?>
	</div>
		<!--end #logo-->

	 <div id="wrapper">
	   <div id="page">
	     <div id="page-bgtop">
		  <hr/>

  	<div id="content">
	  <div class="post">
 
    		 <h2 class ="title"><center><font color="red"><b>WELCOME TO JOBSCOPE</b></center></font></a></h2>

		 <div class="bg-img">
		 </div>

   		<p class="meta"></p>
   		<div class="entry">
 
  	</div>
       </div>
   </div>
      <!--end #content-->
 	
	<div id="sidebar">
 
	  <!--end #sidebar-->
 
	 <div style="clear:both;">&nbsp;</div>
  </div>
 </div>
 </div>
 
 <!--end #page-->
 
 <div id="footer-bgcontent">
 <div id="footer">
 <?php
 include("includes/footer.inc.php");
 ?>

 </div>
  </div>
 <!--end #footer-->
 </body>
 </html>


 



 














 



















