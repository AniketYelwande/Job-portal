<?php
	session_start();

	//include(connection.php);
	$conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");

	$q="select * from jobs where j_active=1 order by j_id desc";

	$res=pg_query($conn,$q) or die("Can't Select Database");

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
                <!--end # menu-->
                <div id="search">
                <?php
                include("includes/search.inc.php");
                ?>
                </div>
                <!--end # search-->
       </div>
</div>
<!--end #header -->
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
                                        <h2 class="title" style="margin-left:200px;"><b>WELCOME TO JOBSCOPE</b></a></h2>
                                        <p class="meta"></p>
                                        <div class="entry">
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
	</div>		<!--  end #footer -->
</body> 
</html>
         
  
 
             
 








