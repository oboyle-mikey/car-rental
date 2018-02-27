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


<form method="post" style="height: 379px" action="reservationPost.php">

<h2>Add Reservation</h2>


<table style="width: 28%; height: 322px">
	<tr>
		<td style="width: 130px">Client Name</td>
		<td style="width: 253px">
			<input type="Date" name="name" required/></td>
	</tr>

	<tr>
		<td style="width: 130px">Start Date</td>
		<td style="width: 253px">
			<input type="Date" name="start_date" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">End Date</td>
		<td style="width: 253px">
			<input type="Date" name="end_date" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Car Group Name</td>
		<td style="width: 253px">
			<input name="car_group_name" type="text" required/>
		</td>
	</tr>
	<tr>
		<td style="width: 130px">Location ID</td>
		<td style="width: 253px">
			<input name="office_ID" type="text" required/>
		</td>
	</tr>
	<tr>
		<td style="width: 130px">Card Details</td>
		<td style="width: 253px">
			<input name="bank_ac_no" type="text" required/>
		</td>
	</tr>
	
	</table>

	<input name="Button1" type="submit" value="Submit" />
	<input name="Button2" type="reset" value="Reset" />
	
	
</form>


</body>

</html>
