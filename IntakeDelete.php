<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include('dbConfig.php');

	
	
	$query = $db->query("DELETE FROM intake WHERE id = '".$_GET['del_id']."' ");
	if($query)
	{
		header('location:IntakeList.php');
	}
	

?>

</body>
</html>