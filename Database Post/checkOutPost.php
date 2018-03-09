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
if(empty($_POST['start_mileage'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$start_mileage = test_input($_POST['start_mileage']);
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
	$t = "UPDATE reservations set start_mileage = $start_mileage WHERE reservation_ID = $reservation_ID";
	$result = $db->query($t);
	echo($t);

}else{
	header('Location: Home.php');
}

?>
