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
					 
					   $query = $db->query("SELECT * FROM section WHERE id = '".$_GET['section_id']."' ");

					   
					   $rowCount = $query->num_rows;
					  
					   if($rowCount > 0){
						   $a =0;
						while($row = $query->fetch_assoc()){ 
						?>
							
							
							<div class="header">
		<h2>Update Department</h2>
	</div>
	
	<form method="post" action="SectionUpdate.php">

		<?php include('errors.php'); ?>

        <div class="input-group">
			<label>Section</label>
			<input type="text" name="section_no" value="<?php echo $row['section']; ?>" >
		</div>
		
		<div class="input-group">
			<label>Intake</label>
			<input input type="text" name="intake_no" value="<?php echo $row['intake']; ?>" >
		</div>
		
		<div class="input-group">
			<label>Dept</label>
			<input type="text" name="dept_id" value="<?php echo $row['departmant_id']; ?>">
		</div>
		<div class="input-group">
			<label>Section id</label>
			<input type="text" name="id" value="<?php echo $row['id']; ?>">
		</div>
		
		
		<div class="input-group">
			<button type="submit" class="btn" name="update_section">Save</button>
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
	
	if (isset($_POST['update_section'])) {
		// receive all input values from the form
		$section = mysqli_real_escape_string($db, $_POST['section_no']);
		$intake = mysqli_real_escape_string($db, $_POST['intake_no']);
		$dept_id = mysqli_real_escape_string($db, $_POST['dept_id']);
		$id = mysqli_real_escape_string($db, $_POST['id']);
		
		
		
		

		// form validation: ensure that the form is correctly filled
		if (empty($section)) { array_push($errors, "Section  is required"); }
		if (empty($intake)) { array_push($errors, "intake  is required"); }
		if (empty($dept_id)) { array_push($errors, "Department  is required"); }
		

		
		if (count($errors) == 0) {
			
						
		  $queryUpdate = "UPDATE section SET section='$section',intake= '$intake',departmant_id='$dept_id'  WHERE id='$id'";
		  
		  

			mysqli_query($db, $queryUpdate);

			header('location: SectionList.php');
		}

	}
	
	
	
	?>
</body>
</html>