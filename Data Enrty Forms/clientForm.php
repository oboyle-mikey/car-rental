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
            echo '<a  href = "clientForm.php">Client</a>';
            echo '<a  href = "insights.php">Insights</a>';
            echo '<a  href = "reservationHome.php">Reservation</a>';
        }else{
            echo '<a  href = "clientForm.php">Client</a>';
            echo '<a  href = "reservationHome.php">Reservation</a>';
        }
?>
<a href = "logout.php">Logout</a>
</div>

<form method="post" style="height: 379px" action="clientPost.php">

<h2>Add Client</h2>


<table style="width: 28%; height: 322px">
	<tr>
		<td style="width: 130px">Name</td>
		<td style="width: 253px">
			<input name="name" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Email</td>
		<td style="width: 253px">
			<input name="email" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Address</td>
		<td style="width: 253px">
			<input name="address" type="text" required/>
		</td>
	</tr>
	<tr>
		<td style="width: 130px">County</td>
		<td style="width: 253px">
			<input name="county" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Phone No</td>
		<td style="width: 253px">
			<input name="phone_no" type="text"  required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Age</td>
		<td style="width: 253px">
			<input name="age" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Bank Ac</td>
		<td style="width: 253px">
			<input name="bank_ac_no" type="text" required/></td>
	</tr>
	
	</table>

	<input name="Button1" type="submit" value="Submit" />
	<input name="Button2" type="reset" value="Reset" />
	
	
</form>


</body>

</html>


