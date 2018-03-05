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

<form method="post" style="height: 379px" action="clientPost.php">

<h2>Add Client Test</h2>


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


