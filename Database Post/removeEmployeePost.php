<?php 
session_start();
if($_SESSION['login'] != "T")
{
	header("Location: login.php");
}

    include("detail.php");
    
    $employee = $_POST['deletename'];
			
    $sql = "DELETE FROM employees WHERE employee_ID = $employee";
    
	if ($db->query($sql) === TRUE) {
    	echo "Record deleted successfully";
	} else {
    	echo "Error deleting record: " . $db->error;
	}
	
	session_start();
			
?>
	