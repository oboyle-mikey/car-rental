<?PHP

	if($_SESSION['login'] != "T")
	{
		header("Location: login.php");
	}


include ("detail.php"); 
session_start();
$_SESSION['form_validation_err'] = 0;

// Delete Employee

if(empty($_POST['deletename'])){
	
}else{
	
	$nameDelete = $_POST['deletename'];
			
	$sql = "DELETE FROM employees WHERE name = $nameDelete";

	if ($db->query($sql) === TRUE) {
    	echo "Record deleted successfully";
	} else {
    	echo "Error deleting record: " . $db->error;
	}
}

//New Employee

if(empty($_POST['office_ID'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$office_ID = test_input($_POST['office_ID']);
}
if(empty($_POST['name'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$name = test_input($_POST['name']);
}
if(empty($_POST['position'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$position = test_input($_POST['position']);
}
if(empty($_POST['grade'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$grade = test_input($_POST['grade']);
}
if(empty($_POST['base_salery'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$base_salery = test_input($_POST['base_salery']);
}
if(empty($_POST['commission'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$commission = test_input($_POST['commission']);
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if($_SESSION['form_validation_err'] == 0){

	$q  = "INSERT INTO employees (";
	$q .= "office_ID, name, position, grade, base_salery, commission";
	$q .= ") VALUES (";
	$q .= "'$office_ID', '$name', '$position', '$grade', '$base_salery', '$commission')";

	$result = $db->query($q);

	echo($q);

}else{
	header('Location: Home.php');
}


?>
