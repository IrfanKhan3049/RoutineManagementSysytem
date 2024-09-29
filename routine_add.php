  


<?php include('server.php'); ?>
<?php include('ajaxData.php'); ?>




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
		<h2>SUBJECT ADD</h2>
	</div>
	
	<form method="post" action="routine_add.php">

		<?php include('errors.php'); ?>
		
		
		

		<div class="input-group">
		<?php 
		 //Get all DEPERTMENT data
            $query = $db->query("SELECT * FROM subject ORDER BY course_name ASC");
    
              //Count total number of rows
              $rowCount = $query->num_rows;
         ?>
	        <label>Course Name</label>
            <select name="courseName" id="courseName">
            <option value="">Select course Name </option>
			
            <?php
				if($rowCount > 0){
                 while($row = $query->fetch_assoc()){ 
					echo '<option value="'.$row['course_name'].'">'.$row['course_name'].'</option>';
					//echo '<option value="'.$row['intake'].'">'.$_SESSION["dept1"].'</option>';

					
				
					}
				}else{
					echo '<option value="">course not available</option>';
					}
			?>
           </select>
			
		</div>
		
		
		
		
		
		
		
		<div class="input-group">
		<?php 
		 //Get all DEPERTMENT data
            $query = $db->query("SELECT * FROM subject ORDER BY course_name ASC");
    
              //Count total number of rows
              $rowCount = $query->num_rows;
         ?>
	        <label>Course Code</label>
            <select name="courseCode" id="courseCode">
            <option value="">Select course code </option>
			
            <?php
				if($rowCount > 0){
                 while($row = $query->fetch_assoc()){ 
					echo '<option value="'.$row['course_code'].'">'.$row['course_code'].'</option>';

				
					}
				}else{
					echo '<option value="">course not available</option>';
					}
			?>
           </select>
			
		</div>
		
		
		
		
		<div class="input-group">
		<?php 
		 //Get all DEPERTMENT data
            $query = $db->query("SELECT * FROM teacher ORDER BY teacher_id ASC");
    
              //Count total number of rows
              $rowCount = $query->num_rows;
         ?>
	        <label>Course Teacher</label>
            <select name="courseTeacher" id="courseTeacher">
            <option value="">Select teacher </option>
			
            <?php
				if($rowCount > 0){
                 while($row = $query->fetch_assoc()){ 
					echo '<option value="'.$row['teacher_id'].'">'.$row['teacher_id'].'</option>';

				
					}
				}else{
					echo '<option value="">Teacher not available</option>';
					}
			?>
           </select>
			
		</div>
		
		
		
		
     
		
		<div class="input-group">
			<label>Start Time</label>
			<input type="time" name="course_start_time" >
		</div>
		
		<div class="input-group">
			<label>End Time</label>
			<input type="time" name="course_end_time" >
		</div>
		
		
		
		
		
		<div class="input-group">
		<?php 
		 //Get all DEPERTMENT data
            $query = $db->query("SELECT * FROM room ORDER BY room_number ASC");
    
              //Count total number of rows
              $rowCount = $query->num_rows;
         ?>
	        <label>Room</label>
            <select name="roomNumber" id="roomNumber">
            <option value="">Select Room </option>
			
            <?php
				if($rowCount > 0){
                 while($row = $query->fetch_assoc()){ 
					echo '<option value="'.$row['room_number'].'">'.$row['room_number'].'</option>';
				
					}
				}else{
					echo '<option value="">Room not available</option>';
					}
			?>
           </select>
			
		</div>
		
		
		
		
		
		
		<!-- *****dept *********-->
		<div class="input-group">
			<label>Dept</label>
			<input type="text" name="subject_dept" id="subject_dept" value="<?php echo $_SESSION["dept1"]; ?>">
		</div>
		
		
		
		
		
		<!-- *****Intake *********-->
		<div class="input-group">
			<label>Intake</label>
			<input type="text" name="intake" id="intake" value="<?php echo $_SESSION["intake1"]; ?>">
		</div>
		
		
		<!-- *****Section *********-->
		<div class="input-group">
			<label>Section</label>
			<input type="text" name="section" id="section" value="<?php echo $_SESSION["section1"]; ?>">
		</div>
		
		
		
		
		
		
		
		<div class="input-group">
		
	        <label>Day</label>
            <select name="day" id="day">
            <option value="Saturday">Saturday </option>
            <option value="Sunday">Sunday </option> 
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday </option>
            <option value="Wednesday">Wednesday </option>
           
			
            
           </select>
			
		</div>
		
		
		<div class="input-group">
			<button type="submit" class="btn" name="add_routine">ADD</button>
		</div>
	
		
	</form>
	
	
		<div class="footer">
	  
        <footer>
            <p><a>Developed by Team Error</a>
            <br>Contact information: <a href="mailto:someone@example.com">irfankhan@gmail.com</a></p>
		
        </footer>
	</div>
</body>
</html>