<?PHP

	if($_SESSION['login'] != "T")
	{
		header("Location: login.php");
	}


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
	$t = "UPDATE reservations set end_mileage = '$end_mileage' WHERE reservation_ID = '$reservation_ID'";
	$result = $db->query($t);

	if($_SESSION['maintenance'] =="T")
	{
	
	
		$t = "SELECT end_date FROM reservations WHERE reservation_ID = '$reservation_ID'";
		$result = $db->query($t);
		$row = mysqli_fetch_assoc($result);
		$end_date = $row['end_date'];

		$t = "UPDATE reservations set end_date = DATE_SUB('$end_date', interval 2 day) WHERE `reservation_ID` = '$reservation_ID'";
		$result = $db->query($t);
	
	}
	//Calculate number of days rented
	$t = "SELECT datediff(`end_date`, `start_date`) AS 'days' FROM reservations WHERE `reservation_ID` = '$reservation_ID'";
	$result = $db->query($t);
	$row = mysqli_fetch_assoc($result);
	$daysRented = $row['days'];


	//Update days rented
	$t = "UPDATE reservations set daysRented = '$daysRented' WHERE reservation_ID = '$reservation_ID'";
	$result = $db->query($t);


	//Calculate miles driven
	$t = "SELECT start_mileage FROM reservations WHERE reservation_ID = '$reservation_ID'";
	$result = $db->query($t);
	$row = mysqli_fetch_assoc($result);
	$start_mileage = $row['start_mileage'];
	$miles = $end_mileage - $start_mileage;

	//Get RATE ID
	$t = "SELECT rate_ID FROM reservations WHERE reservation_ID = '$reservation_ID'";
	$result = $db->query($t);
	$row = mysqli_fetch_assoc($result);
	$rate_ID = $row['rate_ID'];
	

	//Final price Calculated
	$t = "SELECT `rate_per_mile`, `rate_per_day` FROM rates WHERE `rate_ID` = (SELECT rate_ID FROM reservations WHERE reservation_ID = '$reservation_ID')";
	$result = $db->query($t);
	echo $t;
	$row = mysqli_fetch_assoc($result);
	$mile_rate = $row['rate_per_mile'];
	$day_rate = $row['rate_per_day'];
	$charge = $miles*$mile_rate + $day_rate*$daysRented;


	//Final price updated
	$t = "UPDATE reservations set price = $charge WHERE reservation_ID = '$reservation_ID'";
	$result = $db->query($t);

	//Update time returned
	//Valet car

	//Update Maintanance Window
	$t = "SELECT fleet_ID from reservations where reservation_ID = '$reservation_ID'";
	$result = $db->query($t);
	$row = mysqli_fetch_assoc($result);
	$fleet_ID = $row['fleet_ID'];



	$t = "UPDATE fleet set miles_since_maintanance = miles_since_maintanance + '$miles' WHERE fleet_ID = '$fleet_ID'";
	$result = $db->query($t);


	

	//Update employee & office sales
	$t = "UPDATE employees set totalSales = totalSales + $charge WHERE employee_ID = '$employee_ID'";
	$result = $db->query($t);
	

	$t = "UPDATE offices set sales = sales + $charge WHERE office_ID = '$office_ID'";
	$result = $db->query($t);


	//get client ID
	$t = "SELECT client_ID FROM reservations WHERE reservation_ID = '$reservation_ID'";
	$result = $db->query($t);
	$row = mysqli_fetch_assoc($result);
	$client_ID = $row['client_ID'];

	
	
	
	//Get client name, email etc to post on an invoice
	$t = "SELECT name, address, county FROM clients WHERE client_ID = '$client_ID'";
	$result = $db->query($t);
	$row = mysqli_fetch_assoc($result);
	$client_name = $row['name'];
	$client_address = $row['address'];
	$client_county = $row['county'];



	//Generate Incvoice 
	$_SESSION['client_name'] = $client_name;
	$_SESSION['client_address'] = $client_address;
	$_SESSION['client_county'] = $client_county;
	$_SESSION['client_charge'] = $charge;
	$_SESSION['client_rate_ID'] = $rate_ID;
	$_SESSION['client_miles_travelled'] = $miles;
	$_SESSION['client_days_rented'] = $days;
	$_SESSION['client_miles_rate'] = $mile_rate;
	$_SESSION['client_days_rate'] = $day_rate;
	header('Location: invoice.php');


}else{
	header('Location: Home.php');
}

?>