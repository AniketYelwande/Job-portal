   <ul>
  
  
            <li>
            <?php

        if(isset($_SESSION['status']))
           {
              echo '<h2 class="title">Hello '.
   $_SESSION['unm'].'...!</h2>';
         }
        else
       {
        echo'
        <form action="process_login.php"method=POST> 
        <b>login:</b><br> <input type="text" name="unm">
             <br>
             <br>
             <b>password:</b><br><input type="password"name="pwd">
             <br>
             <br>
             <b>TYPE:<br><br><select name="cat">
                                     <option> employee
				   <option>employer
				</select>
                        <br>
                          <br>
                        <b><input type="submit" value="login">
                                  </form>';
                        }
              ?>
                       </li>
                       <li>
                     <h2>categories </h2>
                         <ul>
                         <?php
  				$conn=pg_connect("host=192.168.16.1 user=TYA17 password= dbname=jobscope");

       
    				 $q="select * from categories";
      				 $res=pg_query($conn,$q)or die("cant connect");
 
				  while($row=pg_fetch_assoc($res))
  			          {
    				     echo '<li><a href="jobs_by_category.php?cat='.$row['cat_nm'].'">'.
    			             $row['cat_nm'].'</a></li>';
          			   }
          		   pg_close($conn);
          		?>
