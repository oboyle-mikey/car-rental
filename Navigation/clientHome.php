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

<div class = "topnav">
<a> Executive Cars Ltd</ab>
<a class="active" href = "Home.php">Home</a>
<?php 
        if($_SESSION['access']==1){
            echo '<a  href = "payrollForm.php">Payroll</a>';
            echo '<a  href = "fleetForm.php">Fleet</a>';
            echo '<a  href = "employeesForm.php">Employee</a>';
            echo '<a  href = "officeForm.php">Office</a>';
            echo '<a  href = "clientHome.php">Client</a>';
            echo '<a  href = "insights.php">Insights</a>';
            echo '<a  href = "reservationHome.php">Reservation</a>';
        }else{
            echo '<a  href = "clientHome.php">Client</a>';
            echo '<a  href = "reservationHome.php">Reservation</a>';
        }
?>
<a href = "logout.php">Logout</a>
</div>


<h2>Client Management</h2>


<table style="width: 28%; height: 322px">
	<tr>
        <td>
		    <a href = "clientForm.php">New Client</a>
        </td>
	</tr>
    <tr>
        <td>
        <a href = "sendPromo.php">Send Promotional Mail</a>
        </td>
	</tr>
	</table>
	
	
</form>


</body>

</html>