<?php
	
	include("detail.php");
	
	echo $_POST['employee_ID'];
	echo $_POST['name'];
	echo $_POST['position'];
	echo $_POST['grade'];
	echo $_POST['base_salery'];
	echo $_POST['commission'];

	
	$id = $_POST['employee_ID'];
	$name = $_POST['name'];
	$position = $_POST['position'];
	$grade= $_POST['grade'];
	$base_salery = $_POST['base_salery'];
	$commission = $_POST['commission'];
 
	
	
	$q = "UPDATE employees SET name = '$name' , position ='$position', grade = '$grade', base_salery = '$base_salery', commission = '$commission' WHERE employee_ID = '$id' ";
	
	echo $q
	
	query($q)
	
	
	session_start();
   
?>

