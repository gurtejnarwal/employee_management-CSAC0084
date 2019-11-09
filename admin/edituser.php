<?php include"top.php"; 

if ($_SESSION['USEREMAIL']=="") {

echo "<script type='text/javascript'>alert('You are not Login!! Please Log in'); window.location.href ='../index.php'</script>";

echo "you are not login";
}





else{


  $userinfo=$_GET['email'];
  $result=$_GET['result'];
 
 if ($result=="Edit") {
 	# code...
 
if (isset($_POST['update'])) {


	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$phone=$_POST['phone'];
	$department=$_POST['department'];


	

		$sql="UPDATE `users` SET `fname`='$fname',`lastname`='$lname',`dob`='$dob',`email`='$email',`department`='$department',`phone`='$phone' WHERE `email`='$userinfo'";

		echo $sql;

		 if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } 
            else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }

	}

	# code...



 
  
   		
      
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



	
<div class="container-fluid text-center col-lg-5 align-items-center padding">
	<div class="col-12"></div>
	 <h1 class="display-4">Profile Info</h1>
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

	 </form>
</div>


	    				<?php
 

				}
  
				
			}
      
      
      else{
        	    	}

        	    }
        	    elseif ($result=="Delete") {
        	    	# code...
        	    	echo "delete dum dum bum bum";

        	    	$sql="DELETE FROM `users` WHERE `uid`='$userinfo'";
        	    	echo $sql;

			if (mysqli_query($conn, $sql)) 
					    				    {
		  										header('Location:allusers.php');
				           					 } 
				    				
				    				        else {
				               						echo "Error: " . $sql . "" . mysqli_error($conn);
				            					}
        	    }
        	    else
        	    {
        	    	echo "hanji nahi chlya";
        	    }


        	}
 include"bottom.php";  ?>