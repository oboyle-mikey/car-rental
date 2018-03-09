<?php
	session_start();
	
	//initial query to get data for all employees
	
	include("detail.php");
	$q = "SELECT * from fleet";
	$result1 = $db->query($q);
	
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

<body>

<form method="post" style="height: 148px" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >

<h2>Change Employee Data</h2>

<table style="width: 50%; height: 79px">
	<tr>
		<td style="width: 130px">Enter model name:</td>
		<td style="width: 253px">
			<select name="changename" style="width:161px; height: 20px;" class="auto-style8" required>
			
			<?php while($row1 = mysqli_fetch_array($result1)){?>}
			<option value="<?php echo $row1['fleet_ID']; ?>"> <?php  echo $row1['fleet_ID'], ". ", $row1['model']; ?></option>
			
			<?php }?>
			
			</select>
		</td>
	</tr>

</table>

<input name="submit" type="submit" value="Submit" />	
	
</form>

<?php

	if(isset($_POST['submit']))
	{
	
		$changename = $_POST['changename'];
	
		// query db for the chosesn employee
		
		$sql = "SELECT * from fleet WHERE fleet_ID = $changename";
		$result = $db->query($sql);
		$row = mysqli_fetch_array($result);
		
	}else{
	
		echo "Error accessing records";
	}
miles_since_maintanance
?>

<form method="post" style="height: 379px" action="updateFleetPost.php">

<div>

<table style="width: 28%; height: 322px">
	<tr>
		<td style="width: 130px">Fleet ID</td>
		<td style="width: 253px">
			<input type="text" name="fleet_ID" value="<?php echo $row['fleet_ID']; ?>" required/></td>
	</tr>

	<tr>
		<td style="width: 130px">Model</td>
		<td style="width: 253px">
			<input type="text" name="model" value="<?php echo $row['model']; ?>" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Car Group Name</td>
		<td style="width: 253px">
			<input type="text" name="car_group_name" value="<?php echo $row['car_group_name']; ?>" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Maintanence Interval</td>
		<td style="width: 253px">
			<input type="text" name="maintanance_interval" value="<?php echo $row['maintanance_interval']; ?>" required/>
		</td>
	</tr>
	<tr>
		<td style="width: 130px">Mileage</td>
		<td style="width: 253px">
			<input type="text" name="mileage" value="<?php echo $row['mileage']; ?>" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Description</td>
		<td style="width: 253px">
			<input type="text" name="description" value="<?php echo $row['description']; ?>"  required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Car Registration</td>
		<td style="width: 253px">
			<input type="text" name="car_registration" value="<?php echo $row['car_registration']; ?>" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Miles Since Maintanance</td>
		<td style="width: 253px">
			<input type="text" name="miles_since_maintanance" value="<?php echo $row['miles_since_maintanance']; ?>" required/></td>
	</tr>

	
</table>

<input name="edit" type="submit" value="Edit" />

</div>

</form>

</body>

</html>

