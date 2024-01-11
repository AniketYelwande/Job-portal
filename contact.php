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

	<div id="content">
		<div class="post">

		<h2 class="title" style="text-decoration:underline;"> CONTACT </h2>
		<p class="meta" style="margin-left:200px;"> Please Fill This Form If You Have Any Query </p>

		<div class="entry">
		
			<form action="process_contact.php" method="post">
		<pre>	
			FULL NAME  <input type="text" name="nm"> <br><br>
			  EMAIL    <input type="text" name="email"> <br><br>
			  QUERY    <textarea name="query"> </textarea>
			<center><br> <input type="submit" value="submit"> </center>
		</pre>
			</form>
		</div>
		</div>
	</div>      <!--end content -->

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
		
