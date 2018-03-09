<?PHP 

session_start();



include ("detail.php");

$employee_ID = $_POST['employee_ID'];
$password = $_POST['password'];

echo($employee_ID);
echo($password);

$_SESSION['employeeID']= $employee_ID ;
$_SESSION['position']="";
$_SESSION['failedLogin'] = "";


$sql = "select * from employees where employee_ID = '$employee_ID' and password = '$password'";
$result = $db->querry($sql);

$num_results = mysqli_num_rows ($result);
$row = mysql_fetch_assoc($result);

echo($sql);
echo($num_results);

//if($num_results==1)
//{
//    $sql = "select position from employees where employee_ID = '$employee_ID' ";
//    $result = $db->querry($sql);
//    $row = mysql_fetch_assoc($result);
//    $_SESSION['position'] = $row['position'];
//    echo($_SESSION['position']);
   // header("Location: loginHome.php");
//}

//else
//{


//$_SESSION['failedLogin'] = "Login failed plese ensure you have entered the corect ID and password";
//echo($_SESSION['failedLogin']);
//header("Location:UnsuccessfulLogin");
//}



?>