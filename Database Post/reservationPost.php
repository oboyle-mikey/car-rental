<?PHP

include ("detail.php"); 

session_start();
$_SESSION['form_validation_err'] = 0;



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

/*
For start and end mileage maybe save it initially as 0, then update it from the check-out and check-in page
*/

//gets fleet ID	This select statement doesn't check availability
	
$sql = "SELECT fleet_ID from fleet WHERE car_group_name = '".$car_group_name."' LIMIT 1";
		$result = $db->query($sql);
		$fleet_ID = mysqli_fetch_assoc($result);
		
		$fleet_ID = $fleet_ID['fleet_ID'];
		
//gets client_ID using name	
$sql = "SELECT client_ID from clients WHERE name = '".$name."'";
		$result = $db->query($sql);
		$client_ID = mysqli_fetch_assoc($result);
		$client_ID = $client_ID['client_ID'];

		
// gets the rate_ID of the car chosen from fleet, rate_ID isn't currently in the fleet table in sql
$sql = "SELECT car_group_name from fleet WHERE fleet_ID = '".$fleet_ID."'";
		$result = $db->query($sql);
		$rate_ID = mysqli_fetch_assoc($result);
		$rate_ID = $rate_ID['car_group_name'];
		

		
//can't calculate price until the car is returned

//Set employee variable
$employee = $_SESSION["employee_no"];

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//$_SESSION['access'] is the value being posted for employee ID
if($_SESSION['form_validation_err'] == 0){

	$q  = "INSERT INTO reservations (";
	$q .= "fleet_ID, client_ID, employee_ID, office_ID, start_date, end_date, start_mileage, end_mileage, rate_ID";
	$q .= ") VALUES (";
	$q .= "'$fleet_ID','$client_ID','$employee', '$office_ID', '$start_date', '$end_date', '$start_mileage', '$end_mileage', '$rate_ID')";

	$result = $db->query($q);
	
	//Not sure of this works, tried to add bank account to clients table
	//if it works then it would be similar code for updating the price and start/end mileage
	$t = "UPDATE clients set bank_ac_no = '".$bank_ac_no."' WHERE client_ID = '".$client_ID."'";
	$result = $db->query($t);

}else{
	header('Location: Home.php');
}

?>