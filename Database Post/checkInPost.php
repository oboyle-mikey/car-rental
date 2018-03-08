<?PHP

include ("detail.php"); 

session_start();
$_SESSION['form_validation_err'] = 0;

if(empty($_POST['reservation_ID'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$reservation_ID = test_input($_POST['reservation_ID']);
}
if(empty($_POST['end_mileage'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$end_mileage = test_input($_POST['end_mileage']);
}


function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//Calculate number of days rented


//Update days rented
if($_SESSION['form_validation_err'] == 0){
	//if it works then it would be similar code for updating the price and start/end mileage
	$t = "UPDATE reservations set daysRented = $daysRented WHERE reservation_ID = $reservation_ID";
	$result = $db->query($t);
	echo $t;

//Calculate miles driven
if($_SESSION['form_validation_err'] == 0){
	//if it works then it would be similar code for updating the price and start/end mileage
	$t = "SELECT start_mileage FROM reservations WHERE reservation_ID = $reservation_ID";
	$result = $db->query($t);
	$row = mysqli_fetch_assoc($result);
	$start_mileage = $row['start_mileage'];
	$miles = $end_mileage - $start_mileage;
	echo $t;

//Final price Calculated

//Final price updated

//Update time returned

//Valet car

//Update Maintanance Window
if($_SESSION['form_validation_err'] == 0){
	//if it works then it would be similar code for updating the price and start/end mileage
	$t = "UPDATE reservations set miles_since_maintanance = miles_since_maintanance + $miles WHERE reservation_ID = $reservation_ID";
	$result = $db->query($t);
	echo $t;

//Check Maintanance Window

//Update employee & office sales



//$_SESSION['access'] is the value being posted for employee ID
if($_SESSION['form_validation_err'] == 0){
	//if it works then it would be similar code for updating the price and start/end mileage
	$t = "UPDATE reservations set end_mileage = $end_mileage WHERE reservation_ID = $reservation_ID";
	$result = $db->query($t);
	echo $t;

}else{
	header('Location: Home.php');
}

?>