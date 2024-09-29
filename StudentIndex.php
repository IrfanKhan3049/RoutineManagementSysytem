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
				<a  href="#"> Profile<?php //echo $_SESSION['s_id']; ?></a>
			 </div>
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
								?>
								
			<!-- <ul style="text-Align:left;">-->
			               
							
             <a style="color:#B03A2E; font-size:20px;" href="#"><?php echo $row['student_id'];?></a>
             <a style="color:#B03A2E;font-size:20px;" href="#"> <?php echo $row['student_name'];?></a>
             <a style="color:#B03A2E;font-size:20px;" href="#"> <?php echo $row['dept'];?></a>
             <a style="color:#B03A2E;font-size:20px;" href="#"><?php echo $row['intake'];?></a>
             <a style="color:#B03A2E;font-size:20px;" href="#"><?php echo $row['section'];?></a>
             <a href="#"> Edit</a>
             
			 <a href="student_index.php?logout='1'" style="color: white;">logout</a> 
             <!-- </ul>-->
			  <?php
							}
					}else{
							//echo 'STUDENT not available';
					}
        
						
					   



                 ?>
			
			    

			</div>
			
			<div class="body2" style="background-color:white;">
			
				<!--<div class="nav_insitebody">
				
				
				
				
				
						
						
				</div> -->
				<br><center><h1 style="background-color:white;color:#B03A2E;">Student Routine<h2></center>
				
				
				
				
		     </div>
				
				<div class="tablebody" name= "tableshow" id= "tableshow">
				
				
				
				 
				 	<div  id="tableRoutine" >
				<table>
				<tr><th style="color:#B03A2E;border-radius:10%;">Time<br>--------<br>Day</th>
				<th style=" border-radius:10%">8.30 AM To<br>9.30 AM </th>
				<th style=" border-radius:10%">9.35 AM To<br>10.35 AM </th>
				<th style=" border-radius:10%">10.40 AM To<br>11.40 AM </th>
				<th style=" border-radius:10%">11.45 AM To<br>12.45 PM </th>
				<th style=" border-radius:10%">1.30 PM To<br> 2.15 PM </th>
				<th style=" border-radius:10%">2.20 PM To<br> 3.20 PM </th>
				<th style=" border-radius:10%">3.25 PM To<br> 3.25 PM </th>
				<th style=" border-radius:10%">4.30 PM To<br> 4.30 PM </th></tr>
				
				
			    <tr><th style=" border-radius:10%;">SAT</th>
				<td style="color:white; border-radius:10%;" id="8.30AM">
				<?php 
				
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."'AND start_time='08:30:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
				?>
                           <?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
				
							</td>
							
							
							
							
						    <td style="color:white; border-radius:10%" id="9.35AM">
							<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='09:35:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
						   <?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td style="color:white; border-radius:10%;" id="10.40AM">
							
							 <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='10:40:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td style="color:white; border-radius:10%;" id="11.45AM">
											<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='11:45:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
                             <?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td style="color:white; border-radius:10%;" id="1.15AM">
							<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='13:15:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td style="color:white; border-radius:10%;" id="2.20AM">
											<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='14:20:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?><br>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td style="color:white; border-radius:10%;" id="3.25AM">
							                    <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='15:25:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td style="color:white; border-radius:10%;" id="4.30AM">
							                     <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='16:30:00.000000' AND day='Saturday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							</tr>
							
							
							
				<tr><th>SUN</th>
				
				<td style="color:white; " id="8.30AM">
				<?php 
				
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."'AND start_time='08:30:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
				?>
                           <?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
				
							</td>
							
							
							<td id="9.35AM">
							<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='09:35:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
						   <?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td id="10.40AM">
							
							 <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='10:40:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td id="11.45AM">
											<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='11:45:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
                             <?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td id="1.15AM">
							<?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='13:15:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td id="2.20AM">
											<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='14:20:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?><br>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td id="3.25AM">
							                    <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='15:25:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   
							?>
							
							</td>
							<td id="4.30AM">
							                     <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='16:30:00.000000' AND day='Sunday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							</tr>
							
							
							
				<tr><th>MON</th>
				<td style="color:white; " id="8.30AM">
				<?php 
				
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."'AND start_time='08:30:00.000000' AND day='Monday' ");

					   //var_dump($query22);
					   $rowCount = $query22->num_rows;
					   
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
				?>
                           <?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
				
							</td>
							
							
							<td id="9.35AM">
							<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='09:35:00.000000' AND day='Monday' ");

					   //var_dump($query22);
					   $rowCount = $query22->num_rows;
					   
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
						   <?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td id="10.40AM">
							
							 <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='10:40:00.000000' AND day='Monday' ");

					  // var_dump($query22);
					   $rowCount = $query22->num_rows;
					   
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td id="11.45AM">
											<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='11:45:00.000000' AND day='Monday' ");


					   $rowCount = $query22->num_rows;
					   
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
                             <?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td id="1.15AM">
							<?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='13:15:00.000000' AND day='Monday' ");

					   //var_dump($query22);
					   $rowCount = $query22->num_rows;
					   
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td id="2.20AM">
											<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='14:20:00.000000' AND day='Monday' ");
     
					  
					   $rowCount = $query22->num_rows;
					   
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?><br>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td id="3.25AM">
						 <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='15:25:00.000000' AND day='Monday' ");

					
					   $rowCount = $query22->num_rows;
					   
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td id="4.30AM">
							                     <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='16:30:00.000000' AND day='Monday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							</tr>
				<tr><th>TUE</th>
				<td style="color:white; " id="8.30AM">
				<?php 
				
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."'AND start_time='08:30:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
				?>
                           <?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
				
							</td>
							
							
							<td id="9.35AM">
							<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='09:35:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
						   <?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td id="10.40AM">
							
							 <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='10:40:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td id="11.45AM">
											<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='11:45:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
                             <?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td id="1.15AM">
							<?php 

					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='13:15:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td id="2.20AM">
											<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='14:20:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?><br>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td id="3.25AM">
							                    <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='15:25:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td id="4.30AM">
							                     <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='16:30:00.000000' AND day='Tuesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							
							</tr>
				<tr><th>WED</th>
				<td style="color:white; " id="8.30AM">
				<?php 
				
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."'AND start_time='08:30:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
				?>
                           <?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
				
							</td>
							
							
							<td id="9.35AM">
							<?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='09:35:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
						   <?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td id="10.40AM">
							
							 <?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='10:40:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td id="11.45AM">
											<?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='11:45:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
                             <?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td id="1.15AM">
							<?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='13:15:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							<td id="2.20AM">
											<?php 
				  
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='14:20:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?><br>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td id="3.25AM">
							                    <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='15:25:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							<td id="4.30AM">
							                     <?php 
				   
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$studentDept."' AND intake = '".$studentIntake."' AND section = '".$studentSection."' AND start_time='16:30:00.000000' AND day='Wednesday' ");

					   
					   $rowCount = $query22->num_rows;
					  
					   if($rowCount > 0){
						while($row = $query22->fetch_assoc()){ 
						?>
							<?php echo $row['course_code'];?><br>
							<?php echo $row['course_teacher'];?><br>
							<?php echo $row['room_no'];?>
				          <?php
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
							
							</td>
							
							</tr>
				<tr><th>THR</th><td style="color:white;">
				
							</td>
							
							<td>
							
							</td>
							<td>
							
							</td>
							
							<td>
							
							</td>
							
							<td>
							
							</td>
							
							<td>
							
							</td>
							<td>
							
							</td>
							<td>
							
							</td>
							</tr>
				<tr><th>FRI</th><td style="color:white;">
				
							</td>
							
							<td>
							
							</td>
							<td>
							
							</td>
							
							<td>
							
							</td>
							
							<td>
							
							</td>
							
							<td>
							
							</td>
							<td>
							
							</td>
							<td>
							
							</td>
							</tr>

				
			
			   
                    
                </table>
			
		    </div>

			
			</div>
		
		

			   
		    </div>
			
			

	   

        
			
			
			<div class="space">
	
	        </div>
     
			
		
  
	</body>
  
  
</html>