<?php 
session_start();
echo $_SESSION['employee_ID'];
if($_SESSION['login'] != "T")
{
	header("Location: login.php");
}


function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

include ("detail.php"); 

session_start();
$_SESSION['form_validation_err'] = 0;
$employee_ID = $_SESSION['employee_ID'];
echo $employee_ID;


if(empty($_POST['name'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$name = test_input($_POST['name']);
}

if(empty($_POST['car_group_name'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$car_group_name = test_input($_POST['car_group_name']);
}
if(empty($_POST['location'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$office_ID = test_input($_POST['location']);
}
if(empty($_POST['start_date'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$start_date = test_input($_POST['start_date']);
}
if(empty($_POST['end_date'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$end_date = test_input($_POST['end_date']);
}
	$start_mileage = 0;
	$end_mileage=0;
	$price = 0;

	$client_ID = $name;   //set based on selection drop down in form


//Auto Assign Car if Available
$sql = "SELECT fleet_ID, car_group_name FROM fleet WHERE fleet_ID NOT IN (SELECT fleet_ID FROM reservations WHERE end_date > '$start_date' AND start_date < '$end_date' ) AND car_group_name = '$car_group_name' LIMIT 1";
$resultQ = $db->query($sql);



$t = "SELECT office_ID FROM employees WHERE employee_ID = '$employee_ID'";
$result = $db->query($t);
$row = mysqli_fetch_assoc($result);
$office_ID = $row['office_ID'];



$num_results = mysqli_num_rows($resultQ);
$rows = mysqli_fetch_assoc($resultQ);
$fleet_ID = $rows['fleet_ID'];
$rate_ID = $rows['car_group_name'];
if($num_results == 0){
	$fleet_ID = -1;
}


//Check Maintanance Window
	$t = "SELECT miles_since_maintanance, maintanance_interval FROM fleet WHERE fleet_ID = (SELECT fleet_ID From reservations Where reservation_ID = '$reservation_ID')";
	$result = $db->query($t);
	$mile_since_maintanance = $row['miles_since_maintanance'];
	$maintanance_interval = $row['maintanance_interval'];
	if($mile_since_maintanance/$maintanance_interval > 0.75)
	{
		$_SESSION['maintenance'] ="T";
		//update start date to benow + 2 days
		$end_date = date('Y-m-d', strtotime($end_date. ' + 2 days'));		
	}
	



//$_SESSION['access'] is the value being posted for employee ID
if($_SESSION['form_validation_err'] == 0 && $fleet_ID != -1){

	//Insert into database
	$q  = "INSERT INTO reservations (";
	$q .= "fleet_ID, client_ID, employee_ID, office_ID, start_date, end_date, start_mileage, end_mileage, rate_ID, price";
	$q .= ") VALUES (";
	$q .= "'$fleet_ID','$client_ID','$employee_ID', '$office_ID', '$start_date', '$end_date', '$start_mileage', '$end_mileage', '$rate_ID', '$price')";

	$result = $db->query($q);

	echo($q);

	//Generate and display quote
	

}else{
	//Throw no cars available error
	echo("There are no cars available");
	
}

?>