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


<h2>Insight Reports</h2>


<table style="width: 28%; height: 322px">
	<tr>
        <td>
		    <a href = "best_customer_report.php">Best Customers</a>
        </td>
	</tr>
    <tr>
        <td>
        <a href = "reservations_report.php">Reservations</a>
        </td>
	</tr>
    <tr>
        <td>
            <a href = "weekly_revenue_report.php">Weekly Car Revenue</a>
        </td>
	</tr>
    <tr>
        <td>
            <a href = "top_office_report.php">Revenue By Office</a>
        </td>
	</tr>
    <tr>
        <td>
            <a href = "top_employees_report.php">Top Employees</a>
        </td>
	</tr><tr>
        <td>
            <a href = "payroll_by_branch.php">Payroll by Branch</a>
        </td>
	</tr>	
	</table>
	
	
</form>


</body>

</html>


