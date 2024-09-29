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
					 
					   $query = $db->query("SELECT * FROM student WHERE id = '".$_GET['student_id']."' ");

					   
					   $rowCount = $query->num_rows;
					  
					   if($rowCount > 0){
						   $a =0;
						while($row = $query->fetch_assoc()){ 
						?>
							
							
							<div class="header">
		<h2>Update Student</h2>
	</div>
	
	<form method="post" action="StudentUpdate.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="s_name" value="<?php echo $row['student_name']; ?>">
		</div>
		<div class="input-group">
			<label>Id</label>
			<input type="text" name="s_id" value="<?php echo $row['student_id']; ?>" >
		</div>
		
		<div class="input-group">
			<label>Dept</label>
			
			<select  type="text" name="s_dept" >
                  <option value="<?php echo  $row['dept']; ?>"><?php echo  $row['dept']; ?></option>
                  <option value="cse">CSE</option>
                  <option value="eee">EEE</option>
                  <option value="llb">LLB</option>
                  <option value="textile">TEXTILE</option>
                  <option value="bba">BBA</option>
             </select>
		</div>
		
		<div class="input-group">
			<label>Intake</label>
			<input type="text" name="intake" value="<?php echo $row['intake']; ?>" >
		</div>
		<div class="input-group">
			<label>Section</label>
			<input type="text" name="section" value="<?php echo  $row['section']; ?>" >
		</div>
		
	
		
		<div class="input-group">
			<button type="submit" class="btn" name="update_student">Save</button>
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
	
	if (isset($_POST['update_student'])) {
		// receive all input values from the form
		$s_name = mysqli_real_escape_string($db, $_POST['s_name']);
		$s_id = mysqli_real_escape_string($db, $_POST['s_id']);
		$s_dept = mysqli_real_escape_string($db, $_POST['s_dept']);
		$intake = mysqli_real_escape_string($db, $_POST['intake']);
		$section = mysqli_real_escape_string($db, $_POST['section']);
		
		
		 
		
		

		// form validation: ensure that the form is correctly filled
		if (empty($s_name)) { array_push($errors, "Student name is required"); }
		if (empty($s_id)) { array_push($errors, "student id is required"); }
		if (empty($s_dept)) { array_push($errors, "student department is required"); }
		if (empty($intake)) { array_push($errors, "student intake is required"); }
		if (empty($section)) { array_push($errors, "student section is required"); }
		

		
		if (count($errors) == 0) {
			
						
		  $queryUpdate = "UPDATE student SET student_name='$s_name',student_id= '$s_id',dept='$s_dept',intake='$intake',section= '$section'  WHERE student_id='$s_id'";

			
			
			
			
			
			mysqli_query($db, $queryUpdate);

			header('location: StudentList.php');
		}

	}
	
	
	
	?>
</body>
</html>