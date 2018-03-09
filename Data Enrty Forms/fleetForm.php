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

<form method="post" style="height: 379px" action="fleetPost.php">

<h2>Add Car to Fleet</h2>


<table style="width: 28%; height: 322px">
	<tr>
		<td style="width: 130px">Model</td>
		<td style="width: 253px">
			<input name="model" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Car Group name</td>
		<td style="width: 253px">
			<select name="location" style="width: 150px">
			
			
			<?php 
	include("detail.php");
    $sql = "SELECT * FROM rates";
    $result = $db->query($sql);
    
    while($row = mysqli_fetch_assoc($result)) {
        ?>

					<option value="<?php echo $row['rate_ID'];?>"> <?php echo $row['rate_ID'];?> 
					</option>
 
<?php
}
?>
					</select></td>
	</tr>
	<tr>
		<td style="width: 130px">Maintanance Interval</td>
		<td style="width: 253px">
			<input name="maintanance_interval" type="text" required/>
	</tr>
	<tr>
		<td style="width: 130px">Mileage</td>
		<td style="width: 253px">
			<input name="mileage" type="text" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Description</td>
		<td style="width: 253px">
			<input name="description" type="text"  required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Car Registration</td>
		<td style="width: 253px">
			<input name="car_registration" type="text"  required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Office Location</td>
				<td class="auto-style15" style="width: 261px">
		<select name="EventID" style="width: 150px">
			
			
			<?php 
	include("detail.php");
    $sql = "SELECT * FROM offices";
    $result = $db->query($sql);
    
    while($row = mysqli_fetch_assoc($result)) {
        ?>

					<option value="<?php echo $row['office_ID'];?>"> <?php echo $row['address'];?> 
					</option>
 
<?php
}
?>
					</select></td>
	</tr>
	
	</table>

	<input name="Button1" type="submit" value="Submit" />
	<input name="Button2" type="reset" value="Reset" />
	
	
</form>


</body>

</html>
