<?php

	session_start();
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-ie" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Executive Cars Ltd</title>
<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>

<?php include('navbar.php') ?>

<form>

<h2>Database Management</h2>


<table style="width: 28%; height: 322px">
	<tr>
        <td>
	        <a href = "employeesForm.php">New Employee</a>
        </td>
        <td>
        	<a href = "deleteEmployee.php">Remove Employee</a>
	    </td>
	</tr>
    <tr>
        <td>
                <a href = "fleetForm.php">New Car</a>
        </td>
         <td>
        	<a href = "deleteCar.php">Delete Car</a>
	    </td>
	</tr>
    <tr>
        <td>
                <a href = "officeForm.php">New Office</a>
        </td>
         <td>
        	<a href = "deleteOffice.php">Delete Office</a>
	    </td>
	</tr>
    <tr>
        <td>
                <a href = "clientForm.php">New Client</a>
        </td>
         <td>
        	<a href = "deleteClient.php">Remove Client</a>
	    </td>
	</tr>
	</table>
	
	
</form>


</body>

</html>