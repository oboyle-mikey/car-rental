<?PHP

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

include ("detail.php"); 

session_start();
$_SESSION['form_validation_err'] = 0;

if(empty($_POST['car_group_name'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$car_group_name = test_input($_POST['car_group_name']);
}
if(empty($_POST['office_ID'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$office_ID = test_input($_POST['office_ID']);
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
	$employee = $_SESSION["employee_no"];

/*
For start and end mileage maybe save it initially as 0, then update it from the check-out and check-in page
*/

//gets fleet ID	This select statement doesn't check availability
	
$sql = "SELECT fleet_ID FROM fleet WHERE fleet_ID NOT IN (";
$sql .= "SELECT fleet_ID FROM reservations WHERE end_date > '$start_date' AND start_date < '$end_date')";
$result = $db->query($sql);
$num_results = mysqli_num_rows($result);

if($num_results == 1){
	$fleet_ID = mysqli_fetch_assoc($result);
}else if($num_results > 1){
	$fleet_ID = mysqli_fetch_assoc($result[0]);
}else{
	$fleet_ID = -1;
}

//Get Rate ID
$sql = "SELECT rate_ID from fleet WHERE fleet_ID = '$fleet_ID'";
$result = $db->query($sql);
$rate_ID = mysqli_fetch_assoc($result);

//Insert into database
//$_SESSION['access'] is the value being posted for employee ID
if($_SESSION['form_validation_err'] == 0 && $fleet_ID != -1){

	$q  = "INSERT INTO reservations (";
	$q .= "fleet_ID, client_ID, employee_ID, office_ID, start_date, end_date, start_mileage, end_mileage, rate_ID";
	$q .= ") VALUES (";
	$q .= "'$fleet_ID','$client_ID','$employee', '$office_ID', '$start_date', '$end_date', '$start_mileage', '$end_mileage', '$rate_ID')";

	$result = $db->query($q);

	//Not sure of this works, tried to add bank account to clients table
	//if it works then it would be similar code for updating the price and start/end mileage
	$t = "UPDATE clients set bank_ac_no = '.$bank_ac_no.' WHERE client_ID = '.$client_ID.'";
	$result = $db->query($t);

}else{
	header('Location: Home.php');
}

?>