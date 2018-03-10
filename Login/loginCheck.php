<?php


	session_start();



include ("detail.php");

$employee_ID = $_POST['employee_ID'];
$password = $_POST['password'];



$_SESSION['employee_ID']= $employee_ID;

$_SESSION['grade']="";
$_SESSION['failedLogin'] = "";


$sql = "select * from employees where employee_ID = '$employee_ID' and password = '$password'";





$sql = "select * from employees where employee_ID = '$employee_ID' and password = '$password'";
$result = $db->query($sql);

$num_results = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);


if($num_results==0){
    $_SESSION['login'] = "F";
    header("Location: login.php");
}else{
$sql = "select * from employees where employee_ID = '$employee_ID'";
$result = $db->query($sql);
$num_results = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
$position = $row['position'];
$_SESSION['position'] = $position;
$_SESSION['login'] = "T";
$_SESSION['access'] = "";
$_SESSION['office_ID'] = "";
}


$sql = "select * from employees where employee_ID = '$employee_ID' and password = '$password'";
$result = $db->query($sql);


$num_results = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);


echo $sql;
echo $num_results;

if($num_results==1){
    $sql = "select * from employees where employee_ID = '$employee_ID'";
    $result = $db->query($sql);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['grade'] = $row['grade'];
    $_SESSION['login'] = "T";
    $_SESSION['office_ID'] = $row['office_ID'];
    header("Location: loginHome.php");
}
else
{
    $_SESSION['login'] = "F";
    $_SESSION['failedLogin'] = "Login failed please ensure you have entered the correct ID and password";
    header("Location: login.php");
}


?>

