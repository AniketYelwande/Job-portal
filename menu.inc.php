     <ul>
         <li><a href="index.php" class="first">Home</a></li>
         <?php
               if(!isset($_SESSION['employee']))
               {
                  echo '<li><a href="employeeregister.php">employee_register</a></li>'; 
	       }
          ?>


         <?php
               if(!isset($_SESSION['employer']))
                {
            
                    echo'<li><a href="employeerregister.php">employer_register</a></li>';
 
                 }
          ?>               
                <li><a href="contact.php">Contact</a></li>
          
          <?php
                if(isset($_SESSION['employer']))
                {
                     echo '<li><a href ="postjob.php">Postjob</a></li>';
                }
           ?>
         
	  <?php
                if(isset($_SESSION['employer']))
                {
                   echo '<li><a href = "manage.php">Managejob</a></li>';
                }
            ?>

 
           <?php
               if(isset($_SESSION['employer']))
               {
                  echo '<li><a href="admin/index.php">Admin</a>/li>';
               }
            ?>
         
	   <?php
               if(isset($_SESSION['employer']))
               {
                 echo '<li><a href= "process_logout.php">Logout</a><li>';

               }
           ?>

	   <?php
               if(isset($_SESSION['employee']))
               {
                 echo '<li><a href= "process_logout.php">Logout</a><li>';

               }
           ?>
      </ul>
                  
