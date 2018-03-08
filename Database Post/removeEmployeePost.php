<?php 

	include("detail.php");
			
	$sql = "DELETE FROM employees WHERE name = '$_POST[deletename]'";

	if ($db->query($sql) === TRUE) {
    	echo "Record deleted successfully";
	} else {
    	echo "Error deleting record: " . $db->error;
	}
	
	session_start();
			
?>