<?php include"top.php";

$i=1;


      
      $sql = "SELECT * FROM `users` WHERE `access_type`='User' OR `access_type`='Elevated'";
     
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
  			<div class="container">
			
				<form method="POST">
	
			<div class="padding">
				<table class="table table-dark">
  
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
						      <td></td>
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

