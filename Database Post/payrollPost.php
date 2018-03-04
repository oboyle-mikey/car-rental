<?PHP

include ("detail.php"); 

session_start();
$_SESSION['form_validation_err'] = 0;


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
if(empty($_POST['date'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$date = test_input($_POST['date']);
}
if(empty($_POST['pay'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$pay = test_input($_POST['pay']);
}


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
