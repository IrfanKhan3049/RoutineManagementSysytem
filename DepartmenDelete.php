<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include('dbConfig.php');

	
	
	$query = $db->query("DELETE FROM departmanet WHERE id = '".$_GET['del_id']."' ");
	if($query)
	{
		header('location:DepartmentList.php');
	}
	

?>

</body>
</html>