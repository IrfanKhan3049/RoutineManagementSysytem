<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	

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




	
	
	<div class="w3-container">
	
	<h1 style="text-align:center">Students List</h1>
	<table class="w3-table w3-striped w3-bordered" >
	
	<tr>
						<th>SL No</th>
						<th>Student id</th>
						<th>Student Name</th>
						<th>Dept</th>
						<th>Intake</th>
						<th>Section</th>
						<th style="color:#0804E4;">Edite</th>
						<th style="color:red;">Delete</th>
						
						</tr>
				
				<?php 
				   
					   
					   $query = $db->query("SELECT * FROM student order by dept,intake,section,student_id ");

					   
					   $rowCount = $query->num_rows;
					  
					   if($rowCount > 0){
						   $a =1;
						while($row = $query->fetch_assoc()){ 
						?>
							<tr><td><?php echo $a;?></td>
							<td><?php echo $row['student_id'];?></td>
							<td><?php echo $row['student_name'];?></td>
							<td><?php echo $row['dept'];?></td>
							<td><?php echo $row['intake'];?></td>
							<td><?php echo $row['section'];?></td>
							
							<td><button style="color:#0804E4; " onclick="studentUpdate(<?php echo $row['id']; ?>)">Edite</button></td>
							
							<td><button style="color:red; " onclick="studentDelete(<?php echo $row['id']; ?>)">Delete</button></td>
							
							
							
							</tr>
							
							
							
							
				          <?php
						  $a++;
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                    
                </table>
				<p id="demo"> </p>
				
				</div>
	
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
	
	
	
	<script language="javascript">
function studentUpdate(StudentId) {
  
  
	  
	
	
   window.location.href='StudentUpdate.php?student_id=' +StudentId+'';
   
  
  
  
}

function studentDelete(StudentId) {
  var txt;
  var r = confirm("Do you want to delete this Student!\n\nif you press ok the student \nwill permanently delete  \n");
  if (r == true) {
	  
	
	
   window.location.href='StudentDelete.php?del_id=' +StudentId+'';
   
  } else {
    //txt = "You pressed Cancel!";
  }
  
  
}


</script>
</body>
</html>