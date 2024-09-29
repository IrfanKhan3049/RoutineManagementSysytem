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
	
	<h1 style="text-align:center">Room List</h1>
	
	<h4 style="text-align:right"><button style="color:#000005; background:#ECF0F1 " onclick="roomAdd()">Add new Room</button></h4>
	<table class="w3-table w3-striped w3-bordered" >
	
	<tr>
						<th>SL No</th>
						<th>Room</th>
									
						<th style="color:#0804E4;">Edite</th> 
						<th style="color:red;">Delete</th>
						
						</tr>
				
				<?php 
				   
					   
					   $query = $db->query("SELECT * FROM room order by room_number");

					   
					   $rowCount = $query->num_rows;
					  
					   if($rowCount > 0){
						   $a =1;
						while($row = $query->fetch_assoc()){ 
						?>
							<tr><td><?php echo $a;?></td>
							<td><?php echo $row['room_number'];?></td>
							
							
							<td><button style="color:#0804E4; " onclick="roomUpdate(<?php echo $row['id']; ?>)">Edite</button></td>
							
							<td><button style="color:red; " onclick="roomDelete(<?php echo $row['id']; ?>)">Delete</button></td>
							
							
							
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
	function roomAdd() {
  
   window.location.href='RoomNumber.php';
  
}
function departmantUpdate(DepartmentId) {
  
   window.location.href='DepartmentUpdate.php?department_id=' +DepartmentId+'';
  
}

function roomDelete(roomId) {
  var txt;
  var r = confirm("Do you want to delete this Subject !\n\nif you press ok the Subject \nwill permanently delete  \n");
  if (r == true) {
	
   window.location.href='RoomDelete.php?del_id=' +roomId+'';
   
  } else {
    //txt = "You pressed Cancel!";
  }
  
  
}


</script>
</body>
</html>