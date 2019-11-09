<?php include"top.php";

   
   if(isset($_POST['Submit'])) {
     

      // username and password sent from form 
      
		 $myusername = mysqli_real_escape_string($conn,$_POST['login_username']);
      $mypassword = sha1(mysqli_real_escape_string($conn,$_POST['login_password'])); 
      
      $sql = "SELECT * FROM `users` WHERE `email` = '$myusername' and `pass` = '$mypassword'";
     
   //  echo $sql;

  $result = mysqli_query($conn,$sql);// or die(mysql_error());
 
      

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
       //  $active = $row['active'];

       $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) 
      {
		if ($result=mysqli_query($conn,$sql))
  			{
  // Fetch one and one row
	  			while ($row=mysqli_fetch_row($result))
	    		{
		
	    			if ($row[5]=="Admin")
	    				 {

	    						$_SESSION['USEREMAIL']=$row[4];		# code...
	    					
	    						header("location:admin/user.php");
					    		mysqli_free_result($result);


	    					}	
	    			elseif ($row[5]=="Elevated") 
	    			{
	    						# code..
	    				
	    						$_SESSION['USEREMAIL']=$row[4];		# code...
	    					
	    						header("location:elevated/user.php");
					    		mysqli_free_result($result);

		

	    						
	    					}

	    					else{

	    						$_SESSION['USEREMAIL']=$row[4];		# code...
	    					
	    						header("location:regular/user.php");
					    		mysqli_free_result($result);


	    					}		
				   


				}
  
				
			}
      }
      
      else{}
        	    	}

        	    
 ?>



<div class="container-fluid">
 

  		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
	
  				<img src="banner2.jpg" class="img-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12" alt="Banner Responsive">

  		</div>


  </div>



	<div class="container-fluid padding">

		
			
		<div class="row">
			
			<div class="col-xs-12 col-md-6 form-group padding border signupbox"><br><br>


<form action="" method="post">
	
				<input type="text" name="login_username" class="form-control" placeholder="Username" required="required"><br>

				<input type="password" name="login_password" class="form-control" placeholder="Password" required="required"> <br>

				<input type="submit" name="Submit" value="Log In" class="btn btn-primary">

			</div>
			
			<div class="col-xs-12 col-md-6 padding border signupbox"> <br><br>

				 <p>Wish to join,its free and always will be</p> <h6>Register today</h6><br> <a href="signup.php"  class="btn btn-primary">Sign Up</a>
			</div>
		</div>
</form>	
</div>
<?php include"bottom.php"; ?>