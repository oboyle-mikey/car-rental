<?php
	
	session_start();

	if($_SESSION['login'] != "T")
	{
		header("Location: login.php");
	}

	include("detail.php");
	$q = "SELECT * from offices ";
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

<form method="post" style="height: 379px" action="removeOfficePost.php">



<h2>Remove Employee</h2>

<table style="width: 50%; height: 79px">
	<tr>
		<td style="width: 130px">Enter employee name:</td>
		<td style="width: 253px">
			<select name="address" style="width:161px; height: 20px;" class="auto-style8" required>
			
			<?php while($row1 = mysqli_fetch_array($result1)){?>
			
			<option value="<?php echo $row1['office_ID']; ?>"> <?php  echo $row1['address']; ?></option>
		
			<?php }?>
			
			</select>
		</td>
	</tr>

</table>

	<input name="submit" type="submit" value="Delete" />
	
	
</form>


</body>

</html>