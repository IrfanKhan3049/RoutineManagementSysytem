<?php             
			   // <!-- Dropdwon for my project  -->

//Include database configuration file
include('dbConfig.php');



  session_start();

 $dept1=0;
  $intake1=0;
  $section1=0;
  global $dept1;
  global $intake1;
 global $section1;
   
if(isset($_POST["departmant_id"]) && !empty($_POST["departmant_id"])){
	
		//global $dept1;
		if($_POST["departmant_id"]!=null){
			$_SESSION["dept1"] = $_POST["departmant_id"];
		}
		


	
	
    //Get all state data
	
    $query = $db->query("SELECT * FROM intake WHERE departmant_id = '".$_POST['departmant_id']."' ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
	
    
    //Display intake list
    if($rowCount > 0){
        echo '<option value="">Select Intake</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['intake'].'">'.$row['intake'].'</option>';
			
			
        }
    }else{
        echo '<option value="">intake not available</option>';

    }
}



if(isset($_POST["intake"]) && !empty($_POST["intake"])){
	//global $intake1;
	 if($_POST["intake"]!=null){
		 $_SESSION["intake1"] = $_POST["intake"];
	 }
		
		
    //Get all city data
    $query = $db->query("SELECT * FROM section WHERE intake = ".$_POST['intake']." AND departmant_id = '".$_SESSION["dept1"]."' ORDER BY section ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select 	section	</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['section'].'">'.$row['section'].'</option>';
			

			
        }
    }else{
        echo '<option value="">section not available</option>';
    }
}




if(isset($_POST["section"]) && !empty($_POST["section"])){
	  
	  //global $section1;
		if($_POST["section"]){
			$_SESSION["section1"] = $_POST["section"];
		}
		
		//echo $_SESSION["section1"];
    
}



?>