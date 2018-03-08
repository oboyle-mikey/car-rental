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
$sql = "SELECT office_ID from employees WHERE employee_ID = '".$employee_ID."'";
		$result = $db->query($sql);
		$office_ID = mysqli_fetch_assoc($result);
		$office_ID = $office_ID['office_ID'];


//calculates sales for the past month
$sql = "SELECT SUM(price) as sales from reservations where employee_ID = '".$employee_ID."' and start_date between DATE_SUB(CURDATE(), interval 30 day) AND CURDATE()";
		$result = $db->query($sql);
		$sales = mysqli_fetch_assoc($result);
		$sales = $sales['sales'];
		

// gets commission
$sql = "SELECT commission from employees WHERE employee_ID = '".$employee_ID."'";
		$result = $db->query($sql);
		$commission_rate = mysqli_fetch_assoc($result);
		$commission_rate = $commission_rate['commission'];
		$commission = ($commission_rate/100)*$sales;
				
$sql = "SELECT base_salery from employees WHERE employee_ID = '".$employee_ID."'";
		$result = $db->query($sql);
		$salary = mysqli_fetch_assoc($result);
		$salary = $salary['base_salery'];
		$pay = $commission + $salary/12;
		
		
//sets date
$date = date("Y/m/d");		


		
		
		





function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


//if($_SESSION['form_validation_err'] == 0){

	$q  = "INSERT INTO payroll (";
	$q .= "employee_ID, office_ID, date, pay";
	$q .= ") VALUES (";
	$q .= "'$employee_ID', '$office_ID', '$date', '$pay')";

	$result = $db->query($q);

//}else{
//	header('Location: Home.php');
//}

?>
