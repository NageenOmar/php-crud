<?php 
include_once 'connect.php';

$student= "CREATE TABLE IF NOT EXISTS students (
s_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
s_name VARCHAR(100) NOT NULL,
s_major VARCHAR(100) NOT NULL,
s_marks INT
)";

if (mysqli_query($connect, $student)){
	echo "";
} else {
	echo "There is an error";
}

?>