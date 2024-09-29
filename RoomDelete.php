<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include('dbConfig.php');

	
	
	$query = $db->query("DELETE FROM room WHERE id = '".$_GET['del_id']."' ");
	if($query)
	{
		header('location:RoomList.php');
	}
	

?>

</body>
</html>