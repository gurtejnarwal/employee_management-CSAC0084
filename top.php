
<?php include"config.php";



 session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Navbar</title>

	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




<style type="text/css">
	

.signupbox{


	padding-top: 15px;	
	padding-bottom: 15px;
}

.align-items-center {
  -ms-flex-align: center!important;
  align-items: center!important;
}
.d-flex {
  display: -ms-flexbox!important;
  display: flex!important;
}

.captcha-input {
	background:#FFF url('captcha_code.php') repeat-y;
	padding-left: 85px;
	
}
</style>
</head>
<body>

	
		<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
			 

		<div class="container-fluid">


			  <a class="navbar-brand" href="index.php">EMS</a>
			  		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
	
			   		<span class="navbar-toggler-icon"></span>
			 
			</button>



			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link" href="aboutus.php">About Us</a>
			      </li>
					
				  <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="		false">Services</a>
			        
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="contactus.php">Contact Us</a>
			          <a class="dropdown-item" href="pricing.html">Pricing</a>
			        
			          <div class="dropdown-divider"></div>
			        	  <a class="dropdown-item" href="signup.php">Sign Up</a>
			        </div>
			      </li>


			    
			    </ul>
			</div>

			<!--
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>



			    			  <a class="nav-link" href="#" style=" visibility: hidden;">Log Out</a>

			  -->



		</nav>
</div>
