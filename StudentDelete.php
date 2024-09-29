<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include('dbConfig.php');

	
	
	$query = $db->query("DELETE FROM student WHERE id = '".$_GET['del_id']."' ");
	if($query)
	{
		header('location:StudentList.php');
	}
	

?>

</body>
</html>