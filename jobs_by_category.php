<?php
    session_start();

   $conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");

   $q="select * from jobs where j_category='". $_GET['cat']."' and j_active=1";
 
   $res=pg_query($conn,$q) or die("Wrong Query");



?>

  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

 <?php
  include("includes/head.inc.php");
 ?>
 </head>

 <body>
  <div id="header-wrapper ">
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
        <!--end #search -->
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
   <div id="page-bgtop">
   <hr />
   <!--end #logo -->
  <div id="content">
   <div class="post">
     <h2 class="title"><?php echo $_GET['cat'];?></h2>

     <p class ="meta"></p>
         <div class="entry">
       <ul>
      <?php
    while($row=pg_fetch_assoc($res))
           {
                   echo'
      			<li>
			<a
                 href="job_details.php?id='.$row['j_id'].'">'.
             $row['j_title'].'<a>';
           }
       ?>
	</ul>
	</div>
	</div>
    </div> 	 <!--End Content -->

	<div id="sidebar">
				<?php
				include("includes/sidebar.inc.php");
				?>
				</div>  <!-- END SIDEBAR-->

				<div style="clear:both;">&nbsp;</div>

				</div>
			</div>
		</div> <!-- END PAGE -->

		<div id="footer-bgcontent">
			<div id="footer">
				<?php 
					include("includes/footer.inc.php");
				?>
			</div>
		</div>  <!-- END FOOTER-->

	</body>
</html>
 
