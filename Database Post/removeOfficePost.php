<?php 
    include("detail.php");
    
    $office = $_POST['address'];
			
    $sql = "DELETE FROM offices WHERE office_ID = $office";
    
	if ($db->query($sql) === TRUE) {
    	echo "Record deleted successfully";
	} else {
    	echo "Error deleting record: " . $db->error;
	}
	
	session_start();
			
?>
