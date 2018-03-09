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

<form method="post" style="height: 379px" action="checkOutPost.php">

<h2>Check Out</h2>


<table style="width: 28%; height: 322px">
<tr>
<td style="width: 130px">Reservation ID</td>
<td class="auto-style15" style="width: 261px">
<select name="reservation_ID" style="width: 150px">
	<?php 
		include("detail.php");
		$sql = "SELECT reservation_ID, name FROM reservations, clients WHERE start_mileage = 0 AND reservations.client_ID = clients.client_ID";
		$result = $db->query($sql);

		while($row = mysqli_fetch_assoc($result)) {
	   ?>

		<option value="<?php echo $row['reservation_ID'];?>"> <?php echo $row['name'];?>  </option>

	<?php
	}
	?>
			
</select>
</td>

</tr>
	<tr>
		<td style="width: 130px">Start Mileage</td>
		<td style="width: 253px">
			<input type="text" name="start_mileage" required/></td>
	</tr>
	
	</table>

	<input name="Button1" type="submit" value="Submit" />
	<input name="Button2" type="reset" value="Reset" />
	
	
</form>


</body>

</html>