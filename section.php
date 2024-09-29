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
		<h2>Section Add</h2>
	</div>
	
	<form method="post" action="section.php">

		<?php include('errors.php'); ?>
		
        <div class="input-group">
			<label>Section</label>
			<input type="text" name="section_no" >
		</div>
		
		<div class="input-group">
			<label>Intake</label>
			<input type="text" name="intake_no" >
		</div>
		
		<div class="input-group">
			<label>Dept</label>
			<input type="text" name="dept_id" >
		</div>
		
		
		<div class="input-group">
			<button type="submit" class="btn" name="section_add">Add</button>
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