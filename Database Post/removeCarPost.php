<?php 
session_start();
if($_SESSION['login'] != "T")
{
	header("Location: login.php");
}


include ("detail.php"); 
session_start();
    
    $car= $_POST['car'];
			
    $sql = "DELETE FROM fleet WHERE fleet_ID = $car";
    
	if ($db->query($sql) === TRUE) {
    	echo "Record deleted successfully";
	} else {
    	echo "Error deleting record: " . $db->error;
	}
	
	session_start();
			
?>
