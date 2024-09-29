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
					 
					   $query = $db->query("SELECT * FROM intake WHERE id = '".$_GET['intake_id']."' ");

					   
					   $rowCount = $query->num_rows;
					  
					   if($rowCount > 0){
						   $a =0;
						while($row = $query->fetch_assoc()){ 
						?>
							
							
							<div class="header">
		<h2>Update Department</h2>
	</div>
	
	<form method="post" action="IntakeUpdate.php">

		<?php include('errors.php'); ?>

		
		<div class="input-group">
			<label>Intake</label>
			<input type="text" name="intake_no" value="<?php echo $row['intake']; ?>">
		</div>
		
		<div class="input-group">
			<label>Dept Id</label>
			
			
			<select  type="text" name="dept_id" >
                  <option value="<?php echo  $row['departmant_id']; ?>"><?php echo  $row['departmant_id']; ?></option>
                  <option value="cse">CSE</option>
                  <option value="eee">EEE</option>
                  <option value="llb">LLB</option>
                  <option value="textile">TEXTILE</option>
                  <option value="bba">BBA</option>
             </select>
		</div>
		
		
		
		
		
		<div class="input-group">
			<button type="submit" class="btn" name="update_intake">Save</button>
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
	
	if (isset($_POST['update_intake'])) {
		// receive all input values from the form
		$intake = mysqli_real_escape_string($db, $_POST['intake_no']);
		$dept = mysqli_real_escape_string($db, $_POST['dept_id']);

		
		
		

		// form validation: ensure that the form is correctly filled
		if (empty($intake)) { array_push($errors, "intake is required"); }
		if (empty($dept)) { array_push($errors, "Department Code is required"); }
		

		
		if (count($errors) == 0) {
			
						
		  $queryUpdate = "UPDATE intake SET intake='$intake',departmant_id= '$dept'  WHERE intake='$intake'";

			mysqli_query($db, $queryUpdate);

			header('location: IntakeList.php');
		}

	}
	
	
	
	?>
</body>
</html>