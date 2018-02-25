<?PHP 

session_start();

$employee_ID = $_POST['employee_ID'];
$_SESSION['access'] = $employee_ID;

header('Location: Home.php');

?>