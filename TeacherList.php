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
	
	<h1 style="text-align:center">Teachers List</h1>
	<table class="w3-table w3-striped w3-bordered" >
	
						<tr>
						<th>SL No</th>
						<th>Teacher Name</th>
						<th>Teacher id</th>
						<th>Dept</th>
						<th style="color:#0804E4;">Edite</th>
						<th style="color:red;">Delete</th>
						
						
						
						</tr>
				
				<?php 
				   
					   
					   $query = $db->query("SELECT * FROM teacher order by dept ");

					   
					   $rowCount = $query->num_rows;
					  
					   if($rowCount > 0){
						   $a =0;
						while($row = $query->fetch_assoc()){ 
						?>
							<tr><td><?php echo $a;?></td>
							<td><?php echo $row['teacher_name'];?></td>
							<td><?php echo $row['teacher_id'];?></td>
							<td><?php echo $row['dept'];?></td>
                            <td><button style="color:#0804E4; " onclick="teacherUpdate(<?php echo $row['id']; ?>)">Edite</button></td>
							<td><button style="color:red; " onclick="teacherDelete(<?php echo $row['id']; ?>)">Delete</button></td>
							</tr>
							
							
							
				          <?php
						  $a++;
							}
						}else{
							//echo 'Data not fount';
							 }
				   

							?>
                    
                </table>
				
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
		
		
	<script language="javascript">
function teacherUpdate(TeacherId) {
  
  
	  
	
	
   window.location.href='TeacherUpdate.php?teacher_id=' +TeacherId+'';
   
  
  
  
}

function teacherDelete(TeacherId) {
  var txt;
  var r = confirm("Do you want to delete this Teacher!\n\n  if you press ok the teacher \n will permanently delete  \n");
  if (r == true) {
	  
	
	
   window.location.href='TeacherDelete.php?del_id=' +TeacherId+'';
   
  } else {
    //txt = "You pressed Cancel!";
  }
  
  
}


</script>
	</div>
</body>
</html>