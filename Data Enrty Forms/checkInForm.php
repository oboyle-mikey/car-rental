<?php

	session_start();
   
?>

test
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

<form method="post" style="height: 379px" action="checkInPost.php">

<h2>Check In</h2>


<table style="width: 28%; height: 322px">
	<tr>
		<td style="width: 130px">Reservation ID</td>
		<td style="width: 253px">
			<input name="reservation_ID" type="text"  required/></td>
	</tr>
	<tr>
		<td style="width: 130px">End Mileage</td>
		<td style="width: 253px">
			<input name="end_mileage" type="text" required/>
		</td>
	</tr>
	
	</table>

	<input name="Button1" type="submit" value="Generate Invoice" />
	<input name="Button2" type="reset" value="Reset" />
	
	
</form>


</body>

</html>