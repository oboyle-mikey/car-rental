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

<form method="post" style="height: 379px" action="officePost.php">

<h2>Add Office</h2>


<table style="width: 28%; height: 322px">
	<tr>
		<td style="width: 130px">Address</td>
		<td style="width: 253px">
			<input name="address" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Manager</td>
		<td style="width: 253px">
			<input name="manager" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Phone</td>
		<td style="width: 253px">
			<input name="phone" type="text" required/>
		</td>
	</tr>
	<tr>
		<td style="width: 130px">Email</td>
		<td style="width: 253px">
			<input name="email" type="text" required/></td>
	</tr>
	
	</table>

	<input name="Button1" type="submit" value="Submit" />
	<input name="Button2" type="reset" value="Reset" />
	
	
</form>


</body>

</html>
