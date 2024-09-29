<?php 
	session_start(); 


	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['a_id']);
		header("location: admin_login.php");
	}
	  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	
       <title>University Routine System</title>
       <link rel="stylesheet" type="text/css" href="mystyle.css">
	   <title>Bootstrap Example</title>
  
  

    <script src="jquery.min.js"></script>
    <script type="text/javascript">

 $(document).ready(function(){
    $('#departmant').on('change',function(){
        var departmantID = $(this).val();
        if(departmantID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'departmant_id='+departmantID,
				
                success:function(html){
                    $('#intake').html(html);
                    $('#section').html('<option value="">Select intake first</option>'); 
                }
            }); 
        }else{
            $('#intake').html('<option value="">Select intake first</option>');
            $('#section').html('<option value="">Select section first</option>'); 
        }
    });
    
    $('#intake').on('change',function(){
        var intakeID = $(this).val();
        
        if(intakeID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'intake='+intakeID,
                success:function(html){
                    $('#section').html(html);
                }
            }); 
        }else{
            $('#section').html('<option value="">Select intake first</option>'); 
        }
    });
	
	
	
	$('#section').on('change',function(){
        var sectionID = $(this).val();
        
        if(sectionID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'section='+sectionID,
				
				
				
            }); 
        }else{
             
        }
    });
	
	
	
});
</script>
    </head>
  
  
  
    <body>
		 
		<div class="Admin_v_name">
			
			<h3>University Routine Management System</h3>
				
			<div class="nav">
			<a href="Admin_index.php">Home</a>
				<a href="#news">News</a>
				                                                                       
			<!--<p>Welcome <strong><?php echo $_SESSION['a_id']; ?></strong></p> -->
			
			 <a href="Admin_index.php?logout='1'" style="color: white;">logout</a> 
		
	
			</div>
  
		</div>
		
		
		
		
		<div class="Admin_body1">
		
			<div class="sidenav">
			 <div class="AdminImage">
				<img src="adminImage.jpg" alt="Girl in a jacket" width="90" height="90" class="image" >
				<a  href="#">profile</a>
			 </div>
			 <ul>
             <a href="#"> ADMIN</a>
             <a href="TeacherList.php"> TEACHER</a>
             <a href="StudentList.php"> STUDENT</a>
             <a href="SubjectList.php">SUBJECT</a>
             <a href="DepartmentList.php">DEPERTMENT</a>
             <a href="IntakeList.php">INTAKE</a>
             <a href="SectionList.php">SECTION</a>
             <a href="RoomList.php">ROOM</a>
			 <a href="Admin_index.php?logout='1'" style="color: white;">logout</a> 
              </ul>
			    

			</div>
			
			<div class="body2">
			
				<div class="nav_insitebody">
				
				
				
				
				
						
						<div class="dept">
						
						<div class="select-boxes">
    <?php
    //Include database configuration file
    include('dbConfig.php');
    
    //Get all DEPERTMENT data
    $query = $db->query("SELECT * FROM departmanet ORDER BY departmant_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
	<!--<label>Dept</label>-->
    <select name="departmant" id="departmant">
	    <?php  
		 if(isset($_SESSION["dept1"])){
			 echo '<option value="'.$_SESSION["dept1"].'">'.$_SESSION["dept1"].'</option>';
		 }
		
		?>
        <option value="">Select departmant</option>
		
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['departmant_id'].'">'.$row['departmant_id'].'</option>';
				
            }
        }else{
            echo '<option value="">departmant not available</option>';
        }
        ?>
    </select>
    <!--<label>Intake</label> -->
    <select name="intake" id="intake">
	<?php  
		 if(isset($_SESSION["intake1"])){
			 echo '<option value="'.$_SESSION["intake1"].'">'.$_SESSION["intake1"].'</option>';
		 }
		
		?>
        <option value="">Select departmant first</option>
    </select>
	
    <!--<label>Section</label> -->
    <select name="section" id="section">
	  <?php  
		 if(isset($_SESSION["section1"])){
			 echo '<option value="'.$_SESSION["section1"].'">'.$_SESSION["section1"].'</option>';
		 }
		
		?>
        <option value="">Select intake first</option>
    </select>
	<!--<button href="routine_add.php"  class="btn" name="routineShow" id="routineShow" >SHOW</button>-->
	 <a href="routine_add.php"  style="color: red;">ADD</a>
	 <a href="Admin_index.php" >SHOW</a>
    </div>
						
						
						
							<!-- <a href="routine_add.php">ADD</a> -->
							
							
				
						</div>
				</div>
				
				
				
				<div class="tablebody" name= "tableshow" id= "tableshow">
				
				
				<?php include('ajaxData.php'); ?>

				
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
			
			
				<button style="height:70px;width:106px; margin-left:3px;background:#0790F5;pading:5px; " type="button" >
				<table>
				<?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='08:30:00.000000' AND day='Saturday' ");

					   
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
				</button>
                    
                
    
			
			    
			
		    </div>
			
			<div class="table23">
			
			    <table>
                    <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='09:35:00.000000' AND day='Saturday' ");

					   
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
			
			<div class="table24">
			
			    <table>
                    <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='10:40:00.000000' AND day='Saturday' ");

					   
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
			<div class="table25">
			
			    <table>
				<?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='11:45:00.000000' AND day='Saturday' ");

					   
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
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='13:15:00.000000' AND day='Saturday' ");

					   
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
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='14:20:00.000000' AND day='Saturday' ");

					   
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
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='15:25:00.000000' AND day='Saturday' ");

					   
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
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='16:30:00.000000' AND day='Saturday' ");

					   
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
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='08:30:00.000000' AND day='Sunday' ");

					   
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
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='09:35:00.000000' AND day='Sunday' ");

					   
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
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='10:40:00.000000' AND day='Sunday' ");

					   
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
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='11:45:00.000000' AND day='Sunday' ");

					   
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
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='13:15:00.000000' AND day='Sunday' ");

					   
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
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='14:20:00.000000' AND day='Sunday' ");

					   
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
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='15:25:00.000000' AND day='Sunday' ");

					   
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
			
			<div class="table39">
			
			    <table>
				 <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='16:30:00.000000' AND day='Sunday' ");

					   
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


	
	
	        <div class="table41">
			
			    <table>
                    <tr><th>Monday  </th></tr>
                </table>
			
		    </div>
			<div class="table42">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='08:30:00.000000' AND day='Monday' ");

					   
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
			
			<div class="table43">
			
			    <table>
				  <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='09:35:00.000000' AND day='Monday' ");

					   
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
			
			<div class="table44">
			
			    <table>
                      <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='10:40:00.000000' AND day='Monday' ");

					   
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
			<div class="table45">
			
			    <table>
                      <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='11:45:00.000000' AND day='Monday' ");

					   
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
			
			<div class="table46">
			
			    <table>
                      <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='13:15:00.000000' AND day='Monday' ");

					   
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
			
			<div class="table47">
			
			    <table>
                      <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='14:20:00.000000' AND day='Monday' ");

					   
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
			<div class="table48">
			
			    <table>
                      <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='15:25:00.000000' AND day='Monday' ");

					   
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
			
			<div class="table49">
			
			    <table>
                      <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='16:30:00.000000' AND day='Monday' ");

					   
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
			
			
			
			
			
			<div class="table51">
			
			    <table>
                    <tr><th>Tuesday  </th></tr>
                </table>
			
		    </div>
			<div class="table52">
			
			    <table>
				  <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='08:30:00.000000' AND day='Tuesday' ");

					   
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
			
			<div class="table53">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='09:35:00.000000' AND day='Tuesday' ");

					   
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
			
			<div class="table54">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='10:40:00.000000' AND day='Tuesday' ");

					   
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
			<div class="table55">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='11:45:00.000000' AND day='Tuesday' ");

					   
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
			
			<div class="table56">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='13:15:00.000000' AND day='Tuesday' ");

					   
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
			
			<div class="table57">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='14:20:00.000000' AND day='Tuesday' ");

					   
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
			<div class="table58">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='15:25:00.000000' AND day='Tuesday' ");

					   
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
			
			<div class="table59">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='16:30:00.000000' AND day='Tuesday' ");

					   
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
			
			
			
			
			
			<div class="table61">
			
			    <table>
                    <tr><th>Wednesday  </th></tr>
                </table>
			
		    </div>
			<div class="table62">
			
			    <table>
                     <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='08:30:00.000000' AND day='Wednesday' ");

					   
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
			
			<div class="table63">
			
			    <table>
                       <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='09:35:00.000000' AND day='Wednesday' ");

					   
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
			
			<div class="table64">
			
			    <table>
                       <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='10:40:00.000000' AND day='Wednesday' ");

					   
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
			<div class="table65">
			
			    <table>
                       <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='11:45:00.000000' AND day='Wednesday' ");

					   
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
			
			<div class="table66">
			
			    <table>
                       <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='13:15:00.000000' AND day='Wednesday' ");

					   
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
			
			<div class="table67">
			
			    <table>
                       <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='14:20:00.000000' AND day='Wednesday' ");

					   
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
			<div class="table68">
			
			    <table>
                       <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='15:25:00.000000' AND day='Wednesday' ");

					   
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
			
			<div class="table69">
			
			    <table>
                       <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='16:30:00.000000' AND day='Wednesday' ");

					   
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
			
			
			<div class="table71">
			
			    <table>
				<tr><th>Thursday </th></tr>
                    
                </table>
			
		    </div>
			<div class="table72">
			
			    <table>
                       <?php 
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='08:30:00.000000' AND day='Wednesday' ");

					   
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