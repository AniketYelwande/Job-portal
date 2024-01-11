<?php session_start();

	if(!isset($_SESSION['status']))
	{
		header("location:index.php");
	}

	$conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");


	$q="select * from jobs where j_owner_name='".$_SESSION['unm']."'";
	$res=pg_query($conn,$q) or die("query Failed");

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
				<h2 class="title" style="text-decoration:underline;"> Manage Jobs </h2>


				<p class="meta"> </p>
				<div class="entry">

				<center><b> Your Jobs </b></center>

				<table border="0" width="100%">
					<tr>
						<td width="20%">NO.
						<td width="50%">Title
						<td width="20%">Show
						<td width="10%">Delete
					</tr>

					<tr>
						<td colspan="4"><hr> </td>
					</tr>

					<?php
						$count=1;
				
						while($row=pg_fetch_array($res))
						{
						 echo '<tr>
							   <td width="10%">'.$count.'
							   <td width="50%"><a href="job_details.php? id='.$row['j_id'].'">'.$row['j_title'].'
							   <td width="10%"><a href="show.php? id='.$row['j_id'].'&nm='.$row['j_title'].'">show </a>
							   <td width="10%"><a href="process_del_job.php?" id='.$row['j_id'].'"><img src="images/delete.png"></a>
							</tr>';

						$count++;

						}		
					?>
					</tr>
				</table>
				</div>
			</div>
		</div>        <!-- END CONTENT -->
			

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
