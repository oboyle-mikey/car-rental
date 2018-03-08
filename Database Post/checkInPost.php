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