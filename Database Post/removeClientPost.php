<?php 
session_start();
if($_SESSION['login'] != "T")
{
	header("Location: login.php");
}

    include("detail.php");
    
    $client = $_POST['name'];
			
    $sql = "DELETE FROM clients WHERE client_ID = $client";
    
	if ($db->query($sql) === TRUE) {
    	echo "Record deleted successfully";
	} else {
    	echo "Error deleting record: " . $db->error;
	}
	
	session_start();
			
?>
