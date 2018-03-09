<?PHP 

session_start();



include ("detail.php");

$employee_ID = $_POST['employee_ID'];
$password = $_POST['password'];


$_SESSION['employeeID']= $employee_ID;
$_SESSION['position']="";
$_SESSION['failedLogin'] = "";



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
$sql = "select grade from employees where employee_ID = $employee_ID";
$result = $db->query($sql);
$num_results = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
$grade = $row['grade'];


if($grade == 2)
{
$_SESSION['access'] = 1;
}
else
{
$_SESSION['access'] = 0;
}

$_SESSION['login'] = "T";

header("Location: loginHome.php");

}

?>

