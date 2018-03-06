<?PHP

include ("detail.php"); 

session_start();
$_SESSION['form_validation_err'] = 0;


if(empty($_POST['employee_ID'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$employee_ID = test_input($_POST['employee_ID']);
}


//get office ID from employee ID
$sql = "SELECT office_ID from employee WHERE employee_ID = '".$employee_ID."'";
		$result = $db->query($sql);
		$office_ID = mysqli_fetch_assoc($result);
		$office_ID = $office_ID['office_ID'];


//calculates pay
$sql = "SUM price from reservations where employee_ID = '".$employee_ID."' AND start_date < DATEADD(month, -2, GETDATE()) ";
		$result = $db->query($sql);
		$office_ID = mysqli_fetch_assoc($result);
		$office_ID = $office_ID['office_ID'];


function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


if($_SESSION['form_validation_err'] == 0){

	$q  = "INSERT INTO payroll (";
	$q .= "employee_ID, office_ID, date, pay";
	$q .= ") VALUES (";
	$q .= "'$employee_ID', '$office_ID', '$date', '$pay')";

	$result = $db->query($q);

}else{
	header('Location: Home.php');
}

?>
