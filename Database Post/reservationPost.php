<?PHP

include ("detail.php"); 

session_start();


if(empty($_POST['fleet_ID'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$fleet_ID = test_input($_POST['fleet_ID']);
}
if(empty($_POST['client_ID'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$client_ID = test_input($_POST['client_ID']);
}
if(empty($_POST['employee_ID'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$employee_ID = test_input($_POST['employee_ID']);
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
if(empty($_POST['start_mileage'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$start_mileage = test_input($_POST['start_mileage']);
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

	$q  = "INSERT INTO reservations (";
	$q .= "fleet_ID, client_ID, employee_ID, office_ID, start_date, end_date, start_mileage, end_mileage";
	$q .= ") VALUES (";
	$q .= "'$fleet_ID','$client_ID','$employee_ID', '$office_ID', '$start_date', '$end_date', '$start_mileage', '$end_mileage')";

	$result = $db->query($q);

}else{
	header('Location: Home.php');
}

?>
