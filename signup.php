<?php include"top.php"; 




if(count($_POST)>0) {

    if($_POST["captcha_code"]==$_SESSION["captcha_code"])
    {

        $success_message = "Your message received successfully";

    	
				if (isset($_POST['Signup'])) {


				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$email=$_POST['email'];
				$pass1=$_POST['pass1'];
				$pass2=$_POST['pass2'];
				$dob=$_POST['dob'];
				$phone=$_POST['phone'];
				$department=$_POST['department'];

				$at="User";

				if ($pass1==$pass2) {


					$sql="insert into `users` (`fname`,`lastname`,`dob`,`email`,`access_type`,`department`,`pass`,`phone`) values ('$fname','$lname','$dob','$email','$at','$department','$pass1','$phone')";

					//echo $sql;

					 if (mysqli_query($conn, $sql)) {
			               echo "New record created successfully";
			            } 
			            else {
			               echo "Error: " . $sql . "" . mysqli_error($conn);
			            }

				}

				# code...
			}
	}


    else{
        $error_message = "Incorrect Captcha Code";
    }

}



?>
<div class="container-fluid text-center col-lg-5 align-items-center padding">
	<div class="col-12"></div>
	 <h1 class="display-4">Sign Up</h1>
	 <h3>Register Today !!</h3>
	 <form method="post"  style="padding-bottom: 10px;">
	 <div class="row">
	 	<div class="col">
	 		<input type="text" name="fname" class="form-control" placeholder="Firstname" required="required">
	 	</div>
	 	<div class="col">
	 		<input type="text" name="lname" class="form-control" placeholder="Lastname" required="required">
	 	</div>
	 </div><br>
	 <input type="email" name="email" class="form-control" placeholder="Email" required="required"><br>
	 <input type="password" name="pass1" class="form-control"placeholder="Enter Your Password" required="required"><br>
	 <input type="password" name="pass2" class="form-control" placeholder="Confirm Your Password" required="required"><br>
	 <input type="date" name="dob" class="form-control" placeholder="Enter Your DOB" required="required"><br>
	 
     <div class="row">
	 	<div class="col-3">
	 		<label class="form-control">Department</label>
	 	</div>
	 	<div class="col-9">

      <select name="department" class="form-control">
        
        <option>Engineering</option>
        <option>Human Resources</option>
        <option>Technology</option>
        <option>Administration</option>
        <option>Assistance</option>
        <option>Security</option>	
      </select>
    <br>	 	</div>
	 </div>
	 <input type="number" name="phone" class="form-control" placeholder="Enter Your Number" required="required">
	 
	 <br>
	 <div class="row">
	 
	 	<div class="col-4">
	 		<label class="form-control">Enter Captcha Code</label>
	 	</div>
	 
	 	<div class="col-8" class="form-control">
	 		
	 		<div id="error-captcha">
	 			<?php if(isset($error_message)) 
	 			{ echo $error_message; } ?>
	 				
	 		</div>
			
	 		<input name="captcha_code" type="text" class="captcha-input form-control">
	 		
	 		</div>

	 		</div>
	 	
	 <br>
	 <input type="submit" name="Signup" value="Sign Up" class="btn btn-primary btn-lg form-control">
<div class="row">
	<div class="col-12">
		
<?php if(isset($success_message)) { ?>
<div class="demo-success"><?php echo $success_message; ?></div>
<?php } ?>
	</div>
</div>
	 </form>
</div>

<?php include"bottom.php";  ?>