<?php include"top.php";
?>



<section style="padding-top: 10px; padding-bottom: 20px;">
	
	<div class="container">

		<div class="col-12">
			
			<form method="post" name="form1">
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

	
	<input type="submit" name="submit" value="Submit">		
</form>


		</div>
		
	</div>
</section>
 	

<?php
$i=1;


if (isset($_POST['submit'])) 
{	$department=$_POST['department']; 
	     
	      $sql = "SELECT * FROM `users` WHERE `department`='".$department."'";
	     
	     //echo $sql;

	  $result = mysqli_query($conn,$sql);// or die(mysql_error());
	 
	      

	      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	      
	       //  $active = $row['active'];

			if ($result=mysqli_query($conn,$sql))
	  		
	  			{
	  // Fetch one and one row
	?>


  			<div class="container-fluid text-center col-lg-12 align-items-center padding padding-bottom" style="padding-bottom: 40px;">
  			<h1>All Users</h1>
  			<h6>Accept Admins</h6>
  			<div class="container">
			

	
			<div>
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
											      
											    </tr>
											   
						    			<?php

					}
						
}
 
else
{
	echo "Nothing is pressed";
}
 }       	    

?>



  </tbody>
</table>
	</div>
	
</div>
</div>




<?php include"bottom.php"; 

?>
