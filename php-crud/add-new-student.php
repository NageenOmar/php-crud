<?php 
include_once 'header.php';
?>

<div class="container">
<h2 class="mt-5 mb-3"> New Student Info</h2>
<form action="" method="post">
  <div class="mb-3">
    <label for="sname" class="form-label">Student Name</label>
    <input type="text" class="form-control" name="sname" id="sname">
  </div>
  <div class="mb-3">
    <label for="smajor" class="form-label">Student Major</label>
    <input type="text" class="form-control" name="smajor" id="smajor">
  </div>
  <div class="mb-3">
    <label for="smarks" class="form-label">Student Marks</label>
    <input type="number" class="form-control" name="smarks" id="smarks">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>