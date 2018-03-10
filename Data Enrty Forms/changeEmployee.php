<?php


	session_start();

	if($_SESSION['login'] != "T")
	{
		header("Location: login.php");
	}

   

	
	//initial query to get data for all employees
	
	include("detail.php");
	$q = "SELECT * from employees";
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
		<td style="width: 130px">Enter employee name:</td>
		<td style="width: 253px">
			<select name="changename" style="width:161px; height: 20px;" class="auto-style8" required>
			
			<?php while($row1 = mysqli_fetch_array($result1)){?>}
			<option value="<?php echo $row1['employee_ID']; ?>"> <?php  echo $row1['employee_ID'], ". ", $row1['name']; ?></option>
			
			<?php }?>
			
			</select>
		</td>
	</tr>

</table>

<input name="submit" type="submit" value="Submit" />	
	
</form>



<p><br> </br></p>



<?php

	if(isset($_POST['submit']))
	{
	
		$changename = $_POST['changename'];
	
		// query db for the chosesn employee
		
		$sql = "SELECT * from employees WHERE employee_ID = $changename";
		$result = $db->query($sql);
		$row = mysqli_fetch_array($result);
		
		$id = $row['employee_ID'];
		$name = $row['name'];
		$position = $row['position'];
		$grade= $row['grade'];
		$base_salery = $row['base_salery'];
		$commission = $row['commission'];

		
	}
?>

<form method="post" style="height: 379px" action="updateEmployeePost.php">

<div>

<table style="width: 28%; height: 322px">
	<tr>
		<td style="width: 130px">Employee ID</td>
		<td style="width: 253px">
			<input type="text" name="employee_ID" value="<?php echo $id; ?>" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Name</td>
		<td style="width: 253px">
			<input type="text" name="name" value="<?php echo $name; ?>" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Position</td>
		<td style="width: 253px">
			<input type="text" name="position" value="<?php echo $position; ?>" required/>
		</td>
	</tr>
	<tr>
		<td style="width: 130px">Grade</td>
		<td style="width: 253px">
			<input type="text" name="grade" value="<?php echo $grade; ?>" required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Base Salary</td>
		<td style="width: 253px">
			<input type="text" name="base_salery" value="<?php echo $base_salery; ?>"  required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Commission Rate</td>
		<td style="width: 253px">
			<input type="text" name="commission" value="<?php echo $commission; ?>" required/></td>
	</tr>
	
</table>

<input name="edit" type="submit" value="Submit" />

</div>

</form>

</body>

</html>

