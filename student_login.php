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
		<h2>Login</h2>
	</div>
	
	<form method="post" action="student_login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Student Id</label>
			<input type="text" name="s_id" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="s_password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_student">Login</button>
		</div>
		<p>
			Not yet a member? <a href="student_register.php">Sign up</a>
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