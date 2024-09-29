<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>
<body>
	
	<!--**********************************************************************-->

        <div class="v_name">
			<h3>University Routine Management System</h3>
  
		</div>
		<!-- ***************NAVIGATION VAR******************* -->
	
		<div class="navbar">
				<a href="Admin_index.php">Home</a>
				<a href="#news">News</a>
				
		</div>
	<!--************************************************************************-->
	
	
				<?php 
					 
					   $query = $db->query("SELECT * FROM departmanet WHERE id = '".$_GET['department_id']."' ");

					   
					   $rowCount = $query->num_rows;
					  
					   if($rowCount > 0){
						   $a =0;
						while($row = $query->fetch_assoc()){ 
						?>
							
							
							<div class="header">
		<h2>Update Department</h2>
	</div>
	
	<form method="post" action="DepartmentUpdate.php">

		<?php include('errors.php'); ?>

		
		<div class="input-group">
			<label>Dept Id</label>
			<input input type="text" name="dept_id" value="<?php echo $row['departmant_id']; ?>" >
		</div>
		
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="dept_name" value="<?php echo $row['departmant_name']; ?>">
		</div>
		
		
		
		<div class="input-group">
			<button type="submit" class="btn" name="update_department">Save</button>
		</div>
		
	</form>
	
	
							
							
							
							
							
				          <?php
						  $a++;
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							
	
	<div class="space">
	
	</div>
	<div class="footer">
	  
        <footer>
            <p><a>Developed by Team Error</a>
            <br>Contact information: <a href="mailto:someone@example.com">irfankhan@gmail.com</a></p>
		
        </footer>
	</div>
	
	<?php 
	
	if (isset($_POST['update_department'])) {
		// receive all input values from the form
		$dept_id = mysqli_real_escape_string($db, $_POST['dept_id']);
		$dept_name = mysqli_real_escape_string($db, $_POST['dept_name']);

		
		
		

		// form validation: ensure that the form is correctly filled
		if (empty($dept_id)) { array_push($errors, "Department Code is required"); }
		if (empty($dept_name)) { array_push($errors, "Department Name is required"); }
		

		
		if (count($errors) == 0) {
			
						
		  $queryUpdate = "UPDATE departmanet SET departmant_id='$dept_id',departmant_name= '$dept_name'  WHERE departmant_id='$dept_id'";

			mysqli_query($db, $queryUpdate);

			header('location: DepartmentList.php');
		}

	}
	
	
	
	?>
</body>
</html>