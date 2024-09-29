<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include('dbConfig.php');

	
	
	$query = $db->query("DELETE FROM subject WHERE id = '".$_GET['del_id']."' ");
	if($query)
	{
		header('location:SubjectList.php');
	}
	

?>

</body>
</html>