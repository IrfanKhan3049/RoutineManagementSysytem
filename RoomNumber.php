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
		<h2>Room Number Add</h2>
	</div>
	
	<form method="post" action="RoomNumber.php">

		<?php include('errors.php'); ?>

		
		<div class="input-group">
			<label>Room Number</label>
			<input type="text" name="room_number" >
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="room_add">Add</button>
		</div>
		
	</form>
	<div class="space">
	
	</div>
	</form>
	<div class="space">
	
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