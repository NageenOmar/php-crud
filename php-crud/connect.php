<?php 

$db_name = "crud-php";
$db_user = "root";
$db_pass = "";
$db_host = "localhost";

// Create Connection

$connect = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check Connection

if($connect->connect_error){
	echo "Connection Error";
} else {
	echo "";
}
?>