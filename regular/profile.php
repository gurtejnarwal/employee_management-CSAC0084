<?php include"top.php"; 

if ($_SESSION['USEREMAIL']=="") {

echo "<script type='text/javascript'>alert('You are not Login!! Please Log in'); window.location.href ='../index.php'</script>";

echo "you are not login";
}





else{





//// Porfile display code   
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
		

<div class="container-fluid align-items-center padding">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 border align-items-center text-center">
	 <h1 class="display-5 text center">Profile Info</h1>
	 <h3>Please fill in all the details</h3>
	 <form method="post"  style="padding-bottom: 10px;">
	 <div class="row">
	 	<div class="col">
	 		<input type="text" name="fname" class="form-control" placeholder="Firstname" required="required" value="<?php echo $row[1]; ?>">
	 	</div>
	 	<div class="col">
	 		<input type="text" name="lname" class="form-control" placeholder="Lastname" required="required" value="<?php echo $row[2]; ?>">
	 	</div>
	 </div><br>
	 <input type="email" name="email" class="form-control" placeholder="Email" required="required" value="<?php echo $row[4]; ?>"><br>
	 
	 <input type="date" name="dob" class="form-control" placeholder="Enter Your DOB" required="required" value="<?php echo $row[3]; ?>"><br>
	 <div class="row">
	 	<div class="col-3">
	 		<label class="form-control">Department</label>
	 	</div>
	 	<div class="col-9">

      <select name="department" class="form-control" value="<?php echo $row[6]; ?>">
        
        <option>Engineering</option>
        <option>Human Resources</option>
        <option>Technology</option>
        <option>Administration</option>
        <option>Assistance</option>
        <option>Security</option>
      </select>
    <br>	 	</div>
	 </div>
	 <input type="number" name="phone" class="form-control" placeholder="Enter Your Number" required="required" value="<?php echo $row[8]; ?>"><br>
	 <input type="submit" name="update" value="Update Info" class="btn btn-primary btn-lg form-control">

	 
</div>


						<div class="col-lg-6 col-md-6 col-sm-12 border align-items-center text-center">
								

	    								<div>
	    							<h3>Regular User Operations :</h3>
	    									
									<input type="submit" name="request" value="Request Elevated Access" class="btn btn-primary"><br>
									<br>
									<?php

									$sql="select * from `request_access` where `uid`='".$row[0]."'";
										 $result = mysqli_query($conn,$sql);// or die(mysql_error());
										  $row2 = mysqli_fetch_array($result,MYSQLI_ASSOC);
     									if ($result=mysqli_query($conn,$sql))
		  									{	
		  										while ($row2=mysqli_fetch_row($result))
	    		{					
	    								if($row2[3]=='1')
						      			{
						      				echo " Your Request was Accepted";
						      			}
						      			elseif($row2[3]=='2') {
						      				echo "Your Request is still Pending";
						      				# code...
						      			}

						      			elseif($row2[3]=='0') {
						      				echo "Your Request was Declined";

						      			} 
						      			else{

						      			}
	 }

				    				
				    				     }
        	




									?>
	    								</div>

	    						</div>
	    				</div>

	    			</div>
	    			    					
</form>


	    				<?php
 

				if (isset($_POST['request'])) {

$sql1="INSERT INTO `request_access`(`uid`, `access_type`, `result`,`firstname`,`lastname`,`department`) VALUES ('".$row[0]."','".$row[5]."','2','".$row[1]."','".$row[2]."','".$row[6]."')";

		if (mysqli_query($conn, $sql1)) {
               echo "New record created successfully";
            } 
            else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
	# code...
}



				}
  
				
			}
      
      
      else{
        	    	}

        	    
 }
 include"bottom.php"; ?>