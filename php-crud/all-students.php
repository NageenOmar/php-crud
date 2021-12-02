<?php 
include_once 'header.php';
include_once 'connect.php';

$allstudents = "SELECT * FROM students";

$students = mysqli_query ($connect, $allstudents);

?>

<div class="container">
	<div class="mt-5">
		<h3 class="mt-3"> All Students </h1>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>Student ID</th>
				<th>Student Name</th>
				<th>Student Major</th>
				<th>Student Marks</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			 if (mysqli_num_rows($students)>0){
			 	while($row=mysqli_fetch_assoc($students)){
			 	?>
			 	<tr>
			 		<td>
			 			<?php echo $row["s_id"]; ?>
			 		</td>
			 		<td>
			 			<?php echo $row["s_name"]; ?>
			 		</td>
			 		<td>
			 			<?php echo $row["s_major"]; ?>
			 		</td>
			 		<td>
			 			<?php echo $row["s_marks"]; ?>
			 		</td>
			 		<td>
			 			<a href="view-student.php?s_id=<?php echo $row["s_id"];?>" class="btn btn-primary"> View </a>
			 			<a href="edit-student.php?s_id=<?php echo $row["s_id"];?>" class="btn btn-info"> View </a>
			 			<a href="delete-student.php?s_id=<?php echo $row["s_id"];?>" class="btn btn-danger"> View </a>
			 		</td>
			 	</tr>	
			 	<?php
			 	}
			 } else {
			 	echo "No record found";
			 } ?>
			
		</tbody>
	</table>
</div>