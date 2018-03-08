<?php
	
	include("detail.php");
	
	if ($name == '' || $position == '' || $grade == '' || $base_salary == '' || $commission == ''){
	
	echo "ERROR: Please fill in all required fields!";

	}else{

        $name =$_POST['name'];
        $position =$_POST['position'];
        $grade = $_POST['grade'];
        $base_salary = $_POST['base_salary'];
        $commission = $_POST['commission'];
        $employee_ID = $_POST['employee_ID'];

	
	$q = "UPDATE employees SET name = $name, position = $position , grade = $grade, base_salary = $base_salary, commission = $commission WHERE = employee_ID = $employee_ID ";
	
	if(query($q))
	  header("refresh:1; url = index.php");
	else
	  echo "Not updated";
	}
	
	session_start();
   
?>