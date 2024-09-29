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
				<a href="#">News</a>
				
		</div>
<!--************************************************************************-->




	<div class="header">
		<h2>Subject Add</h2>
	</div>
	
	<form method="post" action="SubjectAdd.php">

		<?php include('errors.php'); ?>

		
		<div class="input-group">
			<label>Course Code</label>
			<input type="text" name="course_id" >
		</div>
		<div class="input-group">
			<label>Course Name</label>
			<input type="text" name="course_name" >
		</div>
		<div class="input-group">
			<label>Department Id</label>
			<input type="text" name="dept_id" >
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="subject_add">Add</button>
		</div>
		
	</form>
	<div class="space">
	
	</div>
	<div class="footer">
	  
        <footer>
            <p><a>Developed by Team Error</a>
            <br>Contact information: <a href="mailto:someone@example.com">irfankhan@gmail.com</a></p>
		
        </footer>
	</div>
</body>
</html>