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


<<<<<<< HEAD

=======
<?php include('navbar.php') ?>
>>>>>>> a2b29b0ad5700faa84d45eb02733a65d15fc4a3b

	
<?php 


include ("detail.php"); 

$employee = $_SESSION['employeeID'];


$query = "SELECT name FROM employees WHERE employee_ID = $employee ";
$result = $db->query($query);
$num_results = mysqli_num_rows ($result);

$row = mysqli_fetch_assoc($result);

echo "Welcome ".$row['name'];


<<<<<<< HEAD
echo $_SESSION['position'];
echo $_SESSION['login'];

=======
>>>>>>> a2b29b0ad5700faa84d45eb02733a65d15fc4a3b
?>

</html>