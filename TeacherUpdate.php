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
					 
					   $query = $db->query("SELECT * FROM teacher WHERE id = '".$_GET['teacher_id']."' ");

					   
					   $rowCount = $query->num_rows;
					  
					   if($rowCount > 0){
						   $a =0;
						while($row = $query->fetch_assoc()){ 
						?>
							
							
							<div class="header">
		<h2>Update Teacher</h2>
	</div>
	
	<form method="post" action="TeacherUpdate.php">

		<?php include('errors.php'); ?>
  

			
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="t_name" value="<?php echo $row['teacher_name']; ?>">
		</div>
		<div class="input-group">
			<label>Id</label>
			<input type="text" name="t_id" value="<?php echo $row['teacher_id']; ?>" >
		</div>
		
		<div class="input-group">
			<label>Dept</label>
			
			<select  type="text" name="t_dept" >
                  <option value="<?php echo  $row['dept']; ?>"><?php echo  $row['dept']; ?></option>
                  <option value="cse">CSE</option>
                  <option value="eee">EEE</option>
                  <option value="llb">LLB</option>
                  <option value="textile">TEXTILE</option>
                  <option value="bba">BBA</option>
             </select>
		</div>
		
	
		
	
		
		<div class="input-group">
			<button type="submit" class="btn" name="update_teacher">Save</button>
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
	
	if (isset($_POST['update_teacher'])) {
		
			// receive all input values from the form
		$t_name = mysqli_real_escape_string($db, $_POST['t_name']);
		$t_id = mysqli_real_escape_string($db, $_POST['t_id']);
		$t_dept = mysqli_real_escape_string($db, $_POST['t_dept']);
		
		

		// form validation: ensure that the form is correctly filled
		if (empty($t_name)) { array_push($errors, "teacher name is required"); }
		if (empty($t_id)) { array_push($errors, "teacher id is required"); }
		if (empty($t_dept)) { array_push($errors, "teacher department is required"); }
		
		
		
		if (count($errors) == 0) {
						
		  $queryUpdate = "UPDATE teacher SET teacher_name='$t_name',teacher_id= '$t_id',dept='$t_dept' WHERE teacher_id='$t_id'";

			
			mysqli_query($db, $queryUpdate);

			header('location: TeacherList.php');
		}

	}
	
	
	
	?>
</body>
</html>