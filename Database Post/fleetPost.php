<?PHP

include ("detail.php"); 

session_start();
$_SESSION['form_validation_err'] = 0;


if(empty($_POST['model'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$model = test_input($_POST['model']);
}
if(empty($_POST['car_group_name'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$car_group_name = test_input($_POST['car_group_name']);
}
if(empty($_POST['maintanance_interval'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$maintanance_interval = test_input($_POST['maintanance_interval']);
}
if(empty($_POST['mileage'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$mileage = test_input($_POST['mileage']);
}
if(empty($_POST['description'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$description = test_input($_POST['description']);
}
if(empty($_POST['cost'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$cost = test_input($_POST['cost']);
}
if(empty($_POST['car_registration'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$car_registration = test_input($_POST['car_registration']);
}
if(empty($_POST['office_ID'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$office_ID = test_input($_POST['office_ID']);
}


function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if($_SESSION['form_validation_err'] == 0){

	$q  = "INSERT INTO fleet (";
	$q .= "model, car_group_name, maintanance_interval, mileage, description, cost, car_registration, office_ID";
	$q .= ") VALUES (";
	$q .= "'$model', '$car_group_name', '$maintanance_interval', '$mileage', '$description', '$cost', '$car_registration', '$office_ID')";

	$result = $db->query($q);

}else{
	header('Location: Home.php');
}

?>