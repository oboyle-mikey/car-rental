<?PHP

include ("detail.php"); 

session_start();
$_SESSION['form_validation_err'] = 0;

echo('Testa');

if(empty($_POST['name'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$name = test_input($_POST['name']);
}
if(empty($_POST['email'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$email = test_input($_POST['email']);
}
if(empty($_POST['address'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$address = test_input($_POST['address']);
}
if(empty($_POST['county'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$county = test_input($_POST['county']);
}
if(empty($_POST['phone_no'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$phone_no = test_input($_POST['phone_no']);
}
if(empty($_POST['age'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$age = test_input($_POST['age']);
}
if(empty($_POST['bank_ac_no'])){
	$_SESSION['form_validation_err'] = 1;
}else{
	$bank_ac_no = test_input($_POST['bank_ac_no']);
}

echo('Test1');

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

echo('Test2');

if($_SESSION['form_validation_err'] == 0){

	echo('Test3');

	$q  = "INSERT INTO clients (";
	$q .= "name, email, address, county, phone_no, age, bank_ac_no";
	$q .= ") VALUES (";
	$q .= "'$name', '$email', '$address', '$county', '$phone_no', '$age', '$bank_ac_no'";

	$result = $db->query($q);

	echo($q);

}else{
	header('Location: Home.php');
}

?>

