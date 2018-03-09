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

	$employee_ID = 0; //set based on log variable
	$office_ID = 0;   //set based on log variable
	$client_ID = 0;   //set based on selection drop down in form

	
//Auto Assign Car if Available
$sql = "SELECT fleet_ID, car_group_name FROM fleet WHERE fleet_ID NOT IN (SELECT fleet_ID FROM reservations WHERE end_date > '$start_date' AND start_date < '$end_date' ) AND car_group_name = '$car_group_name' LIMIT 1";
$resultQ = $db->query($sql);
echo $sql;
$num_results = mysqli_num_rows($resultQ);

if($num_results == 1){
	$resultQ = mysqli_fetch_assoc($result);
	$fleet_ID = $resultQ['fleet_ID'];
	$rate_ID = $resultQ['car_group_name'];
	echo($fleet_ID);
	echo($rate_ID);
}else{
	$fleet_ID = -1;
}


//$_SESSION['access'] is the value being posted for employee ID
if($_SESSION['form_validation_err'] == 0 && $fleet_ID != -1){

	//Insert into database
	$q  = "INSERT INTO reservations (";
	$q .= "fleet_ID, client_ID, employee_ID, office_ID, start_date, end_date, start_mileage, end_mileage, rate_ID, price";
	$q .= ") VALUES (";
	$q .= "'$fleet_ID','$client_ID','$employee', '$location', '$start_date', '$end_date', '$start_mileage', '$end_mileage', '$rate_ID', '$price')";

	$result = $db->query($q);

	//Generate and display quote
	

}else{
	//Throw no cars available error
	header('Location: Home.php');
}

?>