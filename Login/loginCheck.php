<?php

	session_start();

	if($_SESSION['login'] != "T")
	{
		header("Location: login.php");
	}


include ("detail.php");

$employee_ID = $_POST['employee_ID'];
$password = $_POST['password'];


$_SESSION['employeeID']= $employee_ID;
$_SESSION['login'] = "";
$_SESSION['access'] = "";
$_SESSION['office_ID'] = "";



$sql = "select * from employees where employee_ID = $employee_ID and password = '$password'";
$result = $db->query($sql);

$num_results = mysqli_num_rows ($result);
$row = mysqli_fetch_assoc($result);


if($num_results==0)
{
    $_SESSION['login'] = "F";
    header("Location: login.php");
}

else
{
$sql = "select grade, office_ID from employees where employee_ID = $employee_ID";
$result = $db->query($sql);
$num_results = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
$grade = $row['grade'];
$office_ID = $row['office_ID'];

if($grade == 2)
{
$_SESSION['access'] = 1;
}
else
{
$_SESSION['access'] = 0;
}

$_SESSION['login'] = "T";
$_SESSION['office_ID'] = $office_ID;

header("Location: loginHome.php");

}

?>

