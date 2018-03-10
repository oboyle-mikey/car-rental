<?PHP

	if($_SESSION['login'] != "T")
	{
		header("Location: login.php");
	}


include ("detail.php"); 
session_start();
$_SESSION['form_validation_err'] = 0;
if(empty($_POST['pay'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$pay = test_input($_POST['pay']);
}
$pay_ID = $_SESSION['pay_ID'];
//get office ID from employee ID
$sql = "SELECT office_ID from employees WHERE employee_ID = '".$pay_ID."'";
		$result = $db->query($sql);
		$office_ID = mysqli_fetch_assoc($result);
		$office_ID = $office_ID['office_ID'];
		
//sets date
$date = date("Y/m/d");		
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
	$q .= "'$pay_ID', '$office_ID', '$date', '$pay')";
	$result = $db->query($q);
}else{
	header('Location: Home.php');
}
?>
