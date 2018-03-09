<?php

	session_start();

	if($_SESSION['login'] != "T")
	{
		header("Location: login.php");
	}

   
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


