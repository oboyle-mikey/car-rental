<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?PHP
	session_start();
	if($_SESSION['login'] != "T")
	{
		header("Location: login.php");
	}
	include("detail.php");
	
	$employee_ID = $_SESSION['employee_ID'];
	$_SESSION['wrong_password'] = "";
	$old_password = $_POST['old_password'];
	$new_password = $_POST['new_password'];
	$sql = "SELECT employee_ID from employees where password = '$old_password' AND employee_ID = '$employee_ID'";
	$result = $db->query($sql);
	$row = mysqli_fetch_assoc($result);
	$employee_check = $row['employee_ID'];
	echo $employee_check;
	if($employee_check == $employee_ID)
	{
		$sql = "UPDATE employees set password = '$new_password' WHERE employee_ID = '$employee_ID'";
		$result = $db->query($sql);
		header("Location: loginHome.php");
	}
	else
	{
		$_SESSION['wrong_password'] = "you have entered the wrong password";
		header("Location: changePasswordForm.php");
	}
	
	
	
	
?>

</body>

</html>
