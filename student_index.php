<?php 

	session_start(); 

    
	if (!isset($_SESSION['s_id'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: student_login.php');
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['s_id']);
		header("location:student_login.php");
	}
	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       <title>University Routine System</title>
       <link rel="stylesheet" type="text/css" href="mystyle.css">
	


    
    </head>
  
  
  
    <body>
		 
		<div class="Admin_v_name">
			
			<h3>University Routine Management System</h3>
				
			<div class="nav">
			<a href="student_index.php">Home</a>
				<a href="#news">News</a>
				                                                                       
			<!--<p>Welcome <strong><?php echo $_SESSION['s_id']; ?></strong></p> -->
			
			 <a href="student_index.php?logout='1'" style="color: white;">logout</a> 
		
	
			</div>
  
		</div>
		
		
		
		
		<div class="Admin_body1">
		
			<div class="sidenav">
			 <div class="AdminImage">
				<img src="adminImage.jpg" alt="Girl in a jacket" width="90" height="90" class="image" >
				<a  href="#"><?php echo $_SESSION['s_id']; ?></a>
			 </div>
			 <ul>
             <a href="#"> Student</a>
             <a href="#"> TEACHER</a>
             <a href="#"> STUDENT</a>
             <a href="#">ADD SUBJECT</a>
             <a href="#">ADD DEPERTMENT</a>
             <a href="#">ADD INTAKE</a>
             <a href="#">ADD SECTION</a>
             <a href="#">ADD ROOM</a>
			 <a href="student_index.php?logout='1'" style="color: white;">logout</a> 
              </ul>
			    

			</div>
			
			<div class="body2">
			
				<div class="nav_insitebody">
				
				
				
				
				
						
						
				</div>
				
				
				
				<div class="tablebody" name= "tableshow" id= "tableshow">
				
				
				<?php 
						
						include('dbConfig.php');
						$studentId=$_SESSION['s_id'];
						$query = $db->query("SELECT * FROM student WHERE student_id = '".$studentId."' ");
						$rowCount = $query->num_rows;
						//var_dump($rowCount);
						
					if($rowCount > 0){
						while($row = $query->fetch_assoc()){ 
								$studentDept= $row['dept'];
								//var_dump($studentDept1);
								$studentIntake= $row['intake'];
								//var_dump($studentIntake1);
								$studentSection= $row['section'];
								//var_dump($studentSection1);
								//echo $studentDept1;
								//echo $studentIntake1;
								//echo $studentSection1;
				
							}
					}else{
							//echo 'STUDENT not available';
					}
        
						
					   



?>

				
				<div class="table11">
				<table>
				<tr><th>Time</th></tr>
			    <tr><th>-----------------</th></tr>

				<tr><th>Day</th></tr>

				
			
			   
                    
                </table>
			
		    </div>
			<div class="table12">
			
			    <table>
								<tr><th>8.30 AM  </th></tr>
								<tr><th> to </th></tr>
								<tr><th>9.30 AM  </th></tr>

				
                    
                </table>
			
		    </div>
			
			<div class="table13">
			
			    <table>
								<tr><th>9.35 AM  </th></tr>
								<tr><th> to </th></tr>
								<tr><th>10.35 AM  </th></tr>
                    
                </table>
			
		    </div>
			
			<div class="table14">
			
			    <table>
								<tr><th>10.40 AM  </th></tr>
								<tr><th> to </th></tr>
								<tr><th>11.40 AM  </th></tr>		
                    
                </table>
			
		    </div>
			<div class="table15">
			
			    <table>
								<tr><th>11.45 AM  </th></tr>
								<tr><th> to </th></tr>
								<tr><th>12.45 PM  </th></tr>
                    
                </table>
			
		    </div>
			
			<div class="table16">
			
			    <table>
								<tr><th>1.15 PM  </th></tr>
								<tr><th> to </th></tr>
								<tr><th>2.15 PM  </th></tr>
                </table>
			
		    </div>
			
			<div class="table17">
			
			    <table>
								<tr><th>2.20 PM  </th></tr>
								<tr><th> to </th></tr>
								<tr><th>3.20 PM  </th></tr>
                    
                </table>
			
		    </div>
			<div class="table18">
			
			    <table>
								<tr><th>3.25 PM  </th></tr>
								<tr><th> to </th></tr>
								<tr><th>4.25 PM  </th></tr>
                </table>
			
		    </div>
			
			<div class="table19">
			
			    <table>
								<tr><th>4.30 PM  </th></tr>
								<tr><th> to </th></tr>
								<tr><th>5.30 PM  </th></tr>
                </table>
			
		    </div>
			
			
			
			
			
			<div class="table21">
			
			    <table>
                    <tr><th>Saturday  </th></tr>

                </table>
			
		    </div>
			<div class="table22">
			
			    <table>
				
				
				<?php 
				
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."'AND start_time='08:30:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                    
                </table>
			
		    </div>
			
			<div class="table23">
			
			    <table>
                    <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='09:35:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table24">
			
			    <table>
                    <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='10:40:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			<div class="table25">
			
			    <table>
				<?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='11:45:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   }

							?>
                    
                </table>
			
		    </div>
			
			<div class="table26">
			
			    <table>
				<?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='13:15:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   }

							?>
                    
                </table>
			
		    </div>
			
			<div class="table27">
			
			    <table>
				<?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='14:20:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   }

							?>
                    
                </table>
			
		    </div>
			<div class="table28">
			
			    <table>
                    <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='15:25:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   }

							?>
                </table>
			
		    </div>
			
			<div class="table29">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='16:30:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   }

							?>
                </table>
			
		    </div>
			
			
			
			<div class="table31">
			
			    <table>
                    <tr><th>Sunday  </th></tr>
                </table>
			
		    </div>
			<div class="table32">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='08:30:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   }

							?>
                </table>
			
		    </div>
			
			<div class="table33">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' start_time='09:35:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   }

							?>
                </table>
			
		    </div>
			
			<div class="table34">
			
			    <table>
				 <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND AND start_time='10:40:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   }

							?>
                    
                </table>
			
		    </div>
			<div class="table35">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='11:45:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   }

							?>
                </table>
			
		    </div>
			
			<div class="table36">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='13:15:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   }

							?>
                </table>
			
		    </div>
			
			<div class="table37">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='14:20:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   }

							?>
                </table>
			
		    </div>
			<div class="table38">
			
			    <table>
                     <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='15:25:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table39">
			
			    <table>
				 <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='16:30:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                    
                </table>
			
		    </div>


	
	
	        <div class="table41">
			
			    <table>
                    <tr><th>Monday  </th></tr>
                </table>
			
		    </div>
			<div class="table42">
			
			    <table>
                     <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='08:30:00.000000' AND day='Monday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table43">
			
			    <table>
				  <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='09:35:00.000000' AND day='Monday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                    
                </table>
			
		    </div>
			
			<div class="table44">
			
			    <table>
                      <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='10:40:00.000000' AND day='Monday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			<div class="table45">
			
			    <table>
                      <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='11:45:00.000000' AND day='Monday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table46">
			
			    <table>
                      <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='13:15:00.000000' AND day='Monday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table47">
			
			    <table>
                      <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='14:20:00.000000' AND day='Monday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			<div class="table48">
			
			    <table>
                      <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='15:25:00.000000' AND day='Monday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table49">
			
			    <table>
                      <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='16:30:00.000000' AND day='Monday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			
			
			
			
			<div class="table51">
			
			    <table>
                    <tr><th>Tuesday  </th></tr>
                </table>
			
		    </div>
			<div class="table52">
			
			    <table>
				  <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='08:30:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                    
                </table>
			
		    </div>
			
			<div class="table53">
			
			    <table>
                     <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='09:35:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table54">
			
			    <table>
                     <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='10:40:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			<div class="table55">
			
			    <table>
                     <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='11:45:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table56">
			
			    <table>
                     <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."'AND start_time='13:15:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table57">
			
			    <table>
                     <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='14:20:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			<div class="table58">
			
			    <table>
                     <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='15:25:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table59">
			
			    <table>
                     <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='16:30:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			
			
			
			
			<div class="table61">
			
			    <table>
                    <tr><th>Wednesday  </th></tr>
                </table>
			
		    </div>
			<div class="table62">
			
			    <table>
                     <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='08:30:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table63">
			
			    <table>
                       <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='09:35:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table64">
			
			    <table>
                       <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='10:40:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			<div class="table65">
			
			    <table>
                       <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='11:45:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table66">
			
			    <table>
                       <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='13:15:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table67">
			
			    <table>
                       <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='14:20:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			<div class="table68">
			
			    <table>
                       <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='15:25:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table69">
			
			    <table>
                       <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='16:30:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			
			<div class="table71">
			
			    <table>
				<tr><th>Thursday </th></tr>
                    
                </table>
			
		    </div>
			<div class="table72">
			
			    <table>
                       <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='08:30:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<center><tr><td><?php echo $row['course_code'];?></td></tr></center>
							<tr><td><?php echo $row['course_teacher'];?></td></tr>
							<tr><td><?php echo $row['room_no'];?></td></tr>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                </table>
			
		    </div>
			
			<div class="table73">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table74">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table75">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table76">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table77">
			
			    <table>
                    
                </table>
			
		    </div>
			<div class="table78">
			
			    <table>
                    
                </table>
			
		    </div>
			
			<div class="table79">
			
			    <table>
                    
                </table>
			
		    </div>

	    </div>

        
			
			
			
			
		</div>
		
		
		</div>
  
  
	</body>
  
  
</html>