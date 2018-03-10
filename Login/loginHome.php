<?php

	session_start();

	if($_SESSION['login'] != "T")
	{
		header("Location: login.php");
	}

   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-ie" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Executive Cars Ltd</title>
<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>



</body>

<?php include('navbar.php'); 


include ("detail.php"); 

$employee_ID = $_SESSION['employee_ID'];


$query = "SELECT name FROM employees WHERE employee_ID = '$employee_ID' ";
$result = $db->query($query);
$num_results = mysqli_num_rows ($result);

$row = mysqli_fetch_assoc($result);

echo "Welcome ".$row['name'];

echo "  " .$_SESSION['position'];
?>

</html>