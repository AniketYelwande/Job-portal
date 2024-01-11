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
	<div id="pg-bgtop">
	
	<div id="content">
		<div class="post">
			<h2 class="title" style="text-decoration:underline;"> POST JOB </a> </h2>
			<p class="meta">JOB SPECIFICATION </p>

			<div class="entry">
			<form action="process_postjob.php" method="post">
		<pre>	
			   TITLE    <input type="text" name="title" style="width:200px;"> <br><br>
			CATEGORIES  <select name="cat" style="width:200px;">
               	         <?php
                           $conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");
                           $q="select * from categories";
                           $res=pg_query($conn,$q) or die("wrong query");
        
                           while($row=pg_fetch_assoc($res))
                           {
                            echo "<option>".$row['cat_nm'];
                           }
			 ?>
                         </select>  <br> 
		     WORKING HOURS  <input type="text" name="hours" style="width:200px;"> <br>
		         SALARY     <input type="text" name="salary" style="width:200px;"> <br> 
			EXPERIENCE  <input type="text"  name="experience" style="width:200px;"> <br>
		       DISCRIPTION  <textarea name="disc" style="width:200px;"> </textarea> <br>
			     CITY   <input type="text" name="city" style="width:200px;">
                         
                          <center><br><br> <input type="submit" value="submit">
                       
                           </form>
                           </div>
                   </div>
           </div> <!--end content-->
     
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
                         
