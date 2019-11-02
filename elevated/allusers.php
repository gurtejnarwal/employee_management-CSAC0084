<?php include"top.php";

$i=1;


       $sql = "SELECT * FROM `users` WHERE `access_type`='User' OR `access_type`='Elevated'";	

      if(isset($_POST['ASC']))
      	{
      		$sql = "SELECT * FROM `users` WHERE `access_type`='User' OR `access_type`='Elevated' ORDER BY `fname` ASC";

      	}

      	elseif (isset($_POST['DSC'])) {
      		# code...
      	
      $sql = "SELECT * FROM `users` WHERE `access_type`='User' OR `access_type`='Elevated' ORDER BY `fname` DESC";
     
     }
     elseif(isset($_POST['ASCT']))
      	{
      		$sql = "SELECT * FROM `users` WHERE `access_type`='User' OR `access_type`='Elevated' ORDER BY `dob` ASC";

      	}

      	elseif (isset($_POST['DSCT'])) {
      		# code...
      	
      $sql = "SELECT * FROM `users` WHERE `access_type`='User' OR `access_type`='Elevated' ORDER BY `dob` DESC";
     
     }
     else
     {
       $sql = "SELECT * FROM `users` WHERE `access_type`='User' OR `access_type`='Elevated'";	


     }
     //echo $sql;

  $result = mysqli_query($conn,$sql);// or die(mysql_error());
 
      

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
       //  $active = $row['active'];

		if ($result=mysqli_query($conn,$sql))
  		
  			{
  // Fetch one and one row
  			?>	
  			<div class="container-fluid text-center col-lg-12 align-items-center padding">
  			<h1>All Users</h1>
  			<h6>Accept Admins</h6>
  			<div class="container-fluid">
			
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12 col-lg-3 text center">
		<form method="POST" name="form2">
			<input type="submit" name="ASC" class="btn btn-secondary list-item" value="Sort By Name(Ascending)">
			<br><br>
			<input type="submit" name="DSC" class="btn btn-secondary list-item" value="Sort By Name(Descending)">
			<br><br>
			<input type="submit" name="ASCT" class="btn btn-secondary list-item" value="Sort By Date of Birth (Ascending)">
			<br><br>
			<input type="submit" name="DSCT" class="btn btn-secondary list-item" value="Sort By Date of Birth (Descending)">
			
	
	 </div>				

	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
				<table class="table table-dark table-stripped table-hover">
  
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Firstname</th>
					      <th scope="col">Lastname</th>
					      <th scope="col">Email</th>
					      <th scope="col">DOB</th>
						  <th scope="col">Department</th>
					      <th scope="col">Access Type</th>
					      <th scope="col">Phone</th>
					      

					    </tr>
					  </thead>
					  <tbody>


  	<?php
	  			while ($row=mysqli_fetch_row($result))
	
	    		{   

		
						?>


						    <tr>
						      <th scope="row"><?php echo $i++; ?></th>
						      <td><?php echo $row[1];  ?></td>
						      <td><?php echo $row[2];  ?></td>
						      <td><?php echo $row[4];  ?></td>
						      <td><?php echo $row[3];  ?></td>

						      <td><?php echo $row[6];  ?></td>
						      <td><?php echo $row[5];  ?></td>
						      <td><?php echo $row[8]   ?></td>
						     
						    </tr>
						   
	    			<?php
				}


			    	}	


						      			
						      			


				
      
      else{  echo "something went wrong";
    
        	    	}

        	    

?>



  </tbody>
</table>
	</div>
	
</div>
</div>
</form>


<?php include"bottom.php"; 



	    			




 


?>

