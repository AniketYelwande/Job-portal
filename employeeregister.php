<?php session_start(); ?>

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
			<!-- end #menu-->
		<div id="search">
			<?php
                                include("includes/search.inc.php");
                        ?>
		</div>
			<!-- end #search-->
		</div>
			<!-- end #header-->
	</div>
		<!-- end #header-wrapper-->
	 <div id="logo">
                        <?php
                                include("includes/logo.inc.php");
                        ?>
         </div>
                <!-- end logo-->
	
	<div id="wrapper">
		<div id="page">
			<div id="page-top">
			<hr/>
			
			<div id="content">
				<div class="post">

				<h2 class="title" style="text-decoration:underline;">REGISTER </h2>
				<p class="meta"> Please fill up the form </p>
				<div class="entry">
			<form action="process_employee_register.php"method="post"enctype="multipart/form-data">
	
	<pre >
                              	 FULL NAME <input type="text" name="nm" style="width:200px;" required> <br>
                                 PASSWORD  <input type="password" name="pwd" required><BR >
                                 GENDER    <INPUT TYPE="RADIO" VALUE="MALE" name="gender">MALE <INPUT TYPE="RADIO" VALUE="FEMALE" name="gender" >FEMALE <BR>
		                 EMAIL     <INPUT TYPE="TEXT"name="email"style="width:200px;" required> <BR>
		                 ADDRESS   <TEXTAREA name="addr"style="width:200px;" required></TEXTAREA> <BR>
		                 PHONE NO. <INPUT TYPE="TEXT"name="ph"style="width:200px;" required><br>
		                 MOBILE NO.<INPUT TYPE="TEXT"name="mobile"style="width:200px;" required> <br>
		          CURRENT LOCATION <INPUT TYPE="TEXT"name="cl"style="width:200px;" required> <BR>
	             CURRENT ANNUAL SALARY <INPUT TYPE="TEXT"name="cas"style="width:200px;" required> <BR>
	    	          CURRENT INDUSTRY <INPUT TYPE="TEXT"name="cindustry"style="width:200px;" required> <BR>
	 	             QUALIFICATION <INPUT TYPE="TEXT"name="quali"style="width:200px;"required> <BR>
		                   PROFILE <TEXTAREA name="profile"style="width:200px;" required></TEXTAREA> <br>
		                  RESUME   <input type="file"name="resume"style="width:200px;">
   <center><br><br><input type="submit"value="submit"></center>
 

    </form>
   </div>
    </div>
 </div>
<!--end #content-->
 <div id="sidebar">
<?php
  include("includes/sidebar.inc.php");
 ?>
 </div>
<!--end #sidebar-->
 <div style="clear: both;">&nbsp;</div>
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

 


   
