<?php include"top.php"; 
   
   $userinfo=$_SESSION['USEREMAIL'];
  
   		
      
      $sql = "SELECT * FROM `users` WHERE `email` = '$userinfo'";
     
   //  echo $sql;

  $result = mysqli_query($conn,$sql);// or die(mysql_error());
 
      

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
       //  $active = $row['active'];

		if ($result=mysqli_query($conn,$sql))
  			{
  // Fetch one and one row
	  			while ($row=mysqli_fetch_row($result))
	    		{
		
						?>



						<div class="container-fluid text-center align-items-center padding border" style="padding-bottom:100px;">
								<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12"> 				
												 <h1 class="display-4">Welcome to your Profile</h1>
			    								<label>Name : </label> <input type="text" value="<?php	echo $row[1]; echo $row[2];  ?>"><br><br>
			    				
					    						<label>DOB : </label> <input type="text" value="<?php	echo $row[3];  ?>"><br><br>
			    								<label>Email : </label> <input type="text" value="<?php	echo $row[4];  ?>"><br><br>
			    								<label>Acess Type: </label> <input type="text" value="<?php	echo $row[5];  ?>"><br><br>
			    								<label>Department : </label> <input type="text" value="<?php	echo $row[6];  ?>"><br><br>
			    								<label>Phone : </label> <input type="text" value="<?php	echo $row[7];  ?>"><br><br>
			    								<input type="submit" name="Signup" value="    		Edit		    " class="btn btn-primary" ><br>
	    								</div>

	    								<div class="col-lg-6 col-md-6 col-sm-12 border"  style="padding-top:150px;">
	    							<h3>Admin Operations :</h3>
	    									
	    											<a href="adduser.php" class="btn btn-primary">Add New User</a><br><br>
	    											<a href="viewrequests.php" class="btn btn-primary">Check Response Requests</a><br><br>
	    											<a href="allusers.php" class="btn btn-primary">View All Users</a><br><br>
	    										<br><br>	
	    								</div>

	    						</div>
	    				</div>

	    			


	    				<?php
 

				}
  
				
			}
      
      
      else{
        	    	}

        	    
 



 include"bottom.php"; ?>