<?php session_start();
 if(!(isset($_SESSION['status'])&&$_SESSION['unm']=='admin'))
   {

 	header("location:../index.php");
   }
?>
 
 <html xmlns="http://www.w3.org/1999/xhtml">
  <head>

 <?php
 include("includes/head.inc.php");
 ?>
 </head>
 <body>
  <div id="header-wrapper">
  <div id="header">
  <div id="menu">
 <?
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
     <div id="page-bgtop">
     <hr/>
   <!--end #logo-->
 <div class="post">

    <h1 class="title">Recent Contacts</h1><p class="byline"><small></small></p>

   <div class="entry">
  <br>
    <table border="1" width="100%">

 <tr>
    <td width="25%"><b>NAME</b>
    <td width="%65"><b>QUERY</b>
   <td width="10%"><b>DEL</b>
    </tr>

  <?php
     $conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");
  
     $q="select * from contact";
 
     $res=pg_query($conn,$q)or die("Query Failed");


  while($row=pg_fetch_assoc($res))
   {
     echo'<tr> <td>'.$row['cont_fnm'].'<br><small>'.$row['cont_email'].'</small><br><br>
                <td>'.$row['cont_query'].'<td>
                <a href="process_delete.php?cat='.$row['cont_fnm'].'"><img src="delete.png"></a>
                </tr>';
             }
     ?>
        </table>
          </div>
   <p class="meta"></p>
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
  <?php
  include("includes/footer.inc.php");
 ?>
   </div>
 </div>
     <!--end #footer-->
   </body>
  </html>

