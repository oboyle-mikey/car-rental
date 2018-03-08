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


//calculates sales for the past month
$sql = "SELECT SUM(price) from reservations where employee_ID = '".$employee_ID."' and (select * from reservations where start_date between DATE_SUB(CURDATE(), interval 30 day) AND CURDATE())"
		$result = $db->query($sql);
		$sales = mysqli_fetch_assoc($result);

// gets commission
$sql = "SELECT commission from employee WHERE employee_ID = '".$employee_ID."'";
		$result = $db->query($sql);
		$commission_rate = mysqli_fetch_assoc($result);
		$commission = ($commission_rate/100)*sales;
		
$sql = "SELECT salery from employee WHERE employee_ID = '".$employee_ID."'";
		$result = $db->query($sql);
		$salary = mysqli_fetch_assoc($result);
		$pay = $commission + $salary/12;
		
		echo $salary;

		
		
		





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
