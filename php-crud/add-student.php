<?php 
include_once 'header.php';
include_once 'connect.php';

$sname = $_POST['sname'];
$smajor = $_POST['smajor'];
$smarks = $_POST['smarks'];

$insert = "INSERT INTO students(
 s_name, S_major, s_marks
) VALUES('$sname', '$smajor', '$smarks')";

if(mysqli_query($connect, $insert)){
	echo '<div class="container"><h3 class="mt-5">Data Inserted</h3></div>';
} else {
  echo '<div class="container"><h3 class="mt-5">There is an error</h3></div>';
}


?>