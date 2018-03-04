<?PHP

include ("detail.php"); 

session_start();
$_SESSION['form_validation_err'] = 0;


if(empty($_POST['address'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$address = test_input($_POST['address']);
}
if(empty($_POST['manager'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$manager = test_input($_POST['manager']);
}
if(empty($_POST['phone'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$phone = test_input($_POST['phone']);
}
if(empty($_POST['email'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$email = test_input($_POST['email']);
}




function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if($_SESSION['form_validation_err'] == 0){

	$q  = "INSERT INTO offices (";
	$q .= "address, manager, phone, email";
	$q .= ") VALUES (";
	$q .= "'$address', '$manager', '$phone', '$email'";

	$result = $db->query($q);

}else{
	header('Location: Home.php');
}

?>