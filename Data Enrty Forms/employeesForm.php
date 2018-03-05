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

<?php include('navbar.php') ?>

<form method="post" style="height: 379px" action="employeesPost.php">

<h2>Add Employee</h2>


<table style="width: 28%; height: 322px">
	<tr>
		<td style="width: 130px">Office ID</td>
		<td style="width: 253px">
			<input name="office_ID" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Name</td>
		<td style="width: 253px">
			<input name="name" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Position</td>
		<td style="width: 253px">
			<input name="position" type="text" required/>
		</td>
	</tr>
	<tr>
		<td style="width: 130px">Grade</td>
		<td style="width: 253px">
			<input name="grade" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Base Salery</td>
		<td style="width: 253px">
			<input name="base_salery" type="text"  required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Commission Rate</td>
		<td style="width: 253px">
			<input name="commission" type="text" required/></td>
	</tr>
	
	</table>

	<input name="Button1" type="submit" value="Submit" />
	<input name="Button2" type="reset" value="Reset" />
	
	
</form>


</body>

</html>

