<?php 
session_start();
if($_SESSION['login'] != "T")
{
	header("Location: login.php");
}

	include("detail.php");
	
	$id = $_POST['fleet_ID'];
	$model = $_POST['model'];
	$car_group_name = $_POST['car_group_name'];
	$maintanance_interval= $_POST['maintanance_interval'];
	$mileage = $_POST['mileage'];
	$description = $_POST['description'];
	$car_registration = $_POST['car_registration'];
	$miles_since_maintanance = $_POST['miles_since_maintanance'];
 
		
	$q = "UPDATE employees SET model = '$model ' , car_group_name ='$car_group_name', maintanance_interval = '$maintanance_interval', mileage = '$mileage', description= '$description', car_registration= '$car_registration', miles_since_maintanance = '$miles_since_maintanance' WHERE fleet_ID = '$id' ";
	
	query($q)	
	

   
?>
