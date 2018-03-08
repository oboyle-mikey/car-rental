<?php 

    include("detail.php");
    
    $employee = $_POST['deletename'];
			
    $sql = "DELETE FROM employees WHERE employee_ID = $employee";
    
    echo($sql);

	if ($db->query($sql) === TRUE) {
    	echo "Record deleted successfully";
	} else {
    	echo "Error deleting record: " . $db->error;
	}
	
	session_start();
			
?>