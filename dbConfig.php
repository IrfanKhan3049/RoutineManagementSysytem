<?php
                   //<!-- Dropdwon for my project  -->
				   
//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'university';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>