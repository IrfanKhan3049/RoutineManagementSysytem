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
				<a href="INDEX.html">Home</a>
				<a href="#news">News</a>
				
		</div>
	<!--************************************************************************-->
	
	
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="student_register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="s_name" >
		</div>
		<div class="input-group">
			<label>Id</label>
			<input type="text" name="s_id"  >
		</div>
		
		<div class="input-group">
			<label>Dept</label>
			
			<select  type="text" name="s_dept" >
			 
                  <option value="cse">CSE</option>
                  <option value="eee">EEE</option>
                  <option value="llb">LLB</option>
                  <option value="textile">TEXTILE</option>
                  <option value="bba">BBA</option>
             </select>
		</div>
		
		<div class="input-group">
			<label>Intake</label>
			<input type="text" name="intake"  >
		</div>
		<div class="input-group">
			<label>Section</label>
			<input type="text" name="section"  >
		</div>
		
	
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="s_password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="s_password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_student">Register</button>
		</div>
		<p>
			Already a member? <a href="student_login.php">Sign in</a>
		</p>
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