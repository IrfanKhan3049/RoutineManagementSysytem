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
	   <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>University Routine System</title>
	   <link rel="stylesheet" type="text/css" href="style.css">
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
	 <a href="AdminHome.php" >SHOW</a>
    </div>
						
						
						
							<!-- <a href="routine_add.php">ADD</a> -->
							
							
				
						</div>
				</div>
				
				
			
        
			
			
			
			
		</div>
		
			
			
				
				
				<?php// include('ajaxData.php'); ?>

				
				<div  id="tableRoutine" >
				<table>
				<tr><th style="color:#B03A2E;">Time<br>--------<br>Day</th>
				<th>8.30 AM To<br>9.30 AM </th>
				<th>9.35 AM To<br>10.35 AM </th>
				<th>10.40 AM To<br>11.40 AM </th>
				<th>11.45 AM To<br>12.45 PM </th>
				<th>1.30 PM To<br> 2.15 PM </th>
				<th>2.20 PM To<br> 3.20 PM </th>
				<th>3.25 PM To<br> 3.25 PM </th>
				<th>4.30 PM To<br> 4.30 PM </th></tr>
				
				
			    <tr><th>SAT</th><td style="color:white;">
				<button onclick="btn2()" style="height:57px;width:113px; background-color:#079EFA; color:white;" >
				<?php 
				
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"]) ){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='08:30:00.000000' AND day='Saturday' ");

					   
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
				   }

							?>
							</button>
							</td>
							
							<td>
							<button id="myBtn2" style="height:57px;width:113px; background-color:#079EFA; color:white;" >
							
							  <?php 
							  
				   if(isset($_SESSION["dept1"]) && isset($_SESSION["intake1"]) && isset($_SESSION["section1"])){
					   
					   $query22 = $db->query("SELECT * FROM routine WHERE dept = '".$_SESSION["dept1"]."' AND intake = '".$_SESSION["intake1"]."' AND section = '".$_SESSION["section1"]."'AND start_time='09:35:00.000000' AND day='Saturday' ");

					   
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
				   }

							?>
							</button>
							</td>
							</tr>
							
							
							
				<tr><th>SUN</th></tr>
				<tr><th>MON</th></tr>
				<tr><th>TUE</th></tr>
				<tr><th>WED</th></tr>
				<tr><th>THR</th></tr>
				<tr><th>FRI</th></tr>

				
			
			   
                    
                </table>
			
		    </div>
		
		
		
		</div>
		<!---************************ modal ***********************--->
		<h2>Animated Modal with Header and Footer</h2>

<!-- Trigger/Open The Modal -->
<button onclick="myBtn()">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <div class="header">
		<h2>Subject Add</h2>
	</div>
	
	<form method="post" action="AdminHome.php">

		<?php// include('errors.php'); ?>

		
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
		
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
//var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function myBtn() {
  modal.style.display = "block";
}
 function btn2() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "block";
  }
}
</script>
  
     
	</body>
  
  
</html>