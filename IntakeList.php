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
	
	<h1 style="text-align:center">Intake List</h1>
	
	<h4 style="text-align:right"><button style="color:#000005; background:#ECF0F1 " onclick="intakeAdd()">Add new Intake</button></h4>
	<table class="w3-table w3-striped w3-bordered" >
	
	<tr>
						<th>SL No</th>
						<th>Intake</th>
						<th>Department</th>					
						<th style="color:#0804E4;">Edite</th> 
						<th style="color:red;">Delete</th>
						
						</tr>
				
				<?php 
				   
					   
					   $query = $db->query("SELECT * FROM intake order by departmant_id,intake");

					   
					   $rowCount = $query->num_rows;
					  
					   if($rowCount > 0){
						   $a =1;
						while($row = $query->fetch_assoc()){ 
						?>
							<tr><td><?php echo $a;?></td>
							<td><?php echo $row['intake'];?></td>
							<td><?php echo $row['departmant_id'];?></td>
							
							<td><button style="color:#0804E4; " onclick="intakeUpdate(<?php echo $row['id']; ?>)">Edite</button></td>
							
							<td><button style="color:red; " onclick="intakeDelete(<?php echo $row['id']; ?>)">Delete</button></td>
							
							
							
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
	function intakeAdd() {
  
   window.location.href='intake.php';
  
}
function intakeUpdate(IntakeId) {
  
   window.location.href='IntakeUpdate.php?intake_id=' +IntakeId+'';
  
}

function intakeDelete(IntakeId) {
  var txt;
  var r = confirm("Do you want to delete this Intake !\n\nif you press ok the Intake \nwill permanently delete  \n");
  if (r == true) {
	
   window.location.href='IntakeDelete.php?del_id=' +IntakeId+'';
   
  } else {
    //txt = "You pressed Cancel!";
  }
  
  
}


</script>
</body>
</html>