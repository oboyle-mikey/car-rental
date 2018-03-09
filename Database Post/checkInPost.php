

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

if($_SESSION['form_validation_err'] == 0){

	//Update End mileage
	$t = "UPDATE reservations set end_mileage = $end_mileage WHERE reservations_ID = $reservation_ID";
	$result = $db->query($t);
	echo $t;

	//Calculate number of days rented
	$t = "SELECT datediff(`end_date`, `start_date`) AS 'days' FROM reservations WHERE `reservation_ID` = 1000000034";
	$result = $db->query($t);
	echo $t;
	$row = mysqli_fetch_assoc($result);
	$days = $row['days'];


	//Update days rented
	$t = "UPDATE reservations set daysRented = $daysRented WHERE reservation_ID = $reservation_ID";
	$result = $db->query($t);
	echo $t;

	//Calculate miles driven
	$t = "SELECT start_mileage FROM reservations WHERE reservation_ID = $reservation_ID";
	$result = $db->query($t);
	echo $t;
	$row = mysqli_fetch_assoc($result);
	$start_mileage = $row['start_mileage'];
	$miles = $end_mileage - $start_mileage;
	

	//Final price Calculated
	$t = "SELECT `rate_per_mile`, `rate_per_day` FROM rates WHERE `rate_ID` = (SELECT rate_ID FROM reservations WHERE reservation_ID = $reservation_ID)";
	$result = $db->query($t);
	echo $t;
	$row = mysqli_fetch_assoc($result);
	$mile_rate = $row['rate_per_mile'];
	$day_rate = $row['rate_per_day'];
	$charge = $miles*$mile_rate + $day_rate*$days;


	//Final price updated
	$t = "UPDATE reservations set price = $charge WHERE reservation_ID = $reservation_ID";
	$result = $db->query($t);
	echo $t;

	//Update time returned
	//Valet car

	//Update Maintanance Window
	$t = "UPDATE reservations set miles_since_maintanance = miles_since_maintanance + $miles WHERE reservation_ID = $reservation_ID";
	$result = $db->query($t);
	echo $t;

	//Check Maintanance Window
	$t = "SELECT miles_since_maintanance, maintanance_interval FROM fleet WHERE fleet_ID = (SELECT fleet_ID From reservations Where reservation_ID = $reservation_ID)";
	$result = $db->query($t);
	echo $t;
	$mile_since_maintanance = $row['miles_since_maintanance'];
	$maintanance_interval = $row['maintanance_interval'];
	if($mile_since_maintanance > $maintanance_interval){
		//Reserve for maintanance of 2 days
	}

	//Update employee & office sales
	$t = "UPDATE employees set totalSales = totalSales + $charge WHERE employee_ID = $employee_ID";
	$result = $db->query($t);
	echo $t;

	$t = "UPDATE offices set sales = sales + $charge WHERE office_ID = $office_ID";
	$result = $db->query($t);
	echo $t;

	//Get client name, email etc to post on an invoice
	$t = "SELECT name, address, county FROM clients WHERE ";

	//Generate Incvoice 
	$_SESSION['client'] = 
	$_SESSION['client'] = 
	$_SESSION['client'] = 
	$_SESSION['client'] = 
	$_SESSION['client'] = 
	$_SESSION['client'] = 
	header('Location: invoice.php');


}else{
	header('Location: Home.php');
}

?>