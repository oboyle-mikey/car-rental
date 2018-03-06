<?php
	
	include("detail.php");
	$q = "SELECT * from employees";
	$result1 = $db->query($q);
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

<body>

<form method="post" style="height: 379px" action="employeesPost.php">

<h2>Change Employee Data</h2>

<table style="width: 50%; height: 79px">
	<tr>
		<td style="width: 130px">Enter employee name:</td>
		<td style="width: 253px">
			<select name="changename" style="width:161px; height: 20px;" class="auto-style8" required>
			
			<?php while($row1 = mysqli_fetch_array($result1)){?>}
			<option value="<?php echo $row1['name']; ?>"> <?php  echo $row1['employee_ID'], ". ", $row1['name']; ?></option>
			
			<?php }?>
			
			</select>
		</td>
	</tr>

</table>	
	
</form>

</body>

</html>

<?php

// creates the edit record form

function renderForm($id, $name, $position, $grade, $base_salary, $commission)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Update Records</title>

</head>

<body>

<form method="post" style="height: 379px" action="employeesPost.php">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<div>

<table style="width: 28%; height: 322px">
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
		<td style="width: 130px">Base Salery</td>
		<td style="width: 253px">
			<input type="text" name="base_salary" value="<?php echo $base_salary; ?>"  required/></td>
	</tr>
	<tr>
		<td style="width: 130px">Commission Rate</td>
		<td style="width: 253px">
			<input type="text" name="commission" value="<?php echo $commission; ?>" required/></td>
	</tr>
	
	</table>

	<input name="submit" type="submit" value="Submit" />

</div>

</form>

</body>

</html>

<?php

}

// query db for the chosesn employee

include("detail.php");
$sql = "SELECT * from employees WHERE name = changename";
$result = $db->query($sql);
$row = mysqli_fetch_array($result);

// get data from db

$name = $row['name'];

$position = $row['position'];

$grade= $row['grade'];

$base_salary = $row['base_salary'];

$commission= $row['commission'];

//display form to update records

renderForm($id, $name, $position, $grade, $base_salary, $commission);

// get form data, making sure it is valid

$id = $_POST['id'];

$name = mysqli_real_escape_string(htmlspecialchars($_POST['name']));

$position = mysqli_real_escape_string(htmlspecialchars($_POST['position']));

$grade= mysqli_real_escape_string(htmlspecialchars($_POST['grade']));

$base_salary = mysqli_real_escape_string(htmlspecialchars($_POST['base_salary']));

$commission = mysqli_real_escape_string(htmlspecialchars($_POST['commission']));


// check that firstname/lastname fields are both filled in

if ($name == '' || $position == '' || $grade == '' || $base_salary == '' || $commission == '')

{

// generate error message

echo "ERROR: Please fill in all required fields!";



//display form

renderForm($id, $name, $position, $grade, $base_salary, $commission);

}

else

{

// save the data to the database

query("UPDATE employees SET name ='$name', position = '$position', grade = '$grade', base_salary = '$base_salary', commission = '$commission' WHERE employee_ID='$id'");

}


?>
