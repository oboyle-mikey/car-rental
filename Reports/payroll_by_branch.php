<?php

	session_start();
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<style>
ul { 
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
.auto-style5 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
	font-size: x-large;
}
.auto-style6 {
	text-align: left;
}
.auto-style7 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
}
</style>
<meta content="en-ie" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel = "stylesheet" type = "text/css" href = "style.css">
<title>Date</title>
</head>

<body>


<?php include('navbar.php') ?>


<p class="auto-style1">Payroll by Office</p>



<td style="width: 125px">Branch</td>
			<td style="width: 129px"><select name="office" style="width: 139px">
			<option>Stephens Green</option>
			<option>Airport</option>
			</select></td>



<?php

include ("detail.php"); 

$office = "";

$office = office;

$query = "select employees.name, offices.address, employees.employee_ID, offices.office_ID, employees.commission, employees.hoursWorked , payroll.pay FROM payroll, employees, offices WHERE $office = offices.address";
$result = $db->query($query);

$num_results = mysqli_num_rows ($result);



?>


<table align="center">

<tr>

<th style="width:219px; height: 23px;" class="auto-style7"> Employee Name </th>
<th style="width:220px; height: 23px;" class="auto-style4"> Hours Worked</th>
<th style="width:220px; height: 23px;" class="auto-style4"> Commission</th>
<th style="width:220px; height: 23px;" class="auto-style4"> Total Pay</th>

</tr>

<?php

for ($i=0; $i <$num_results; $i++)
{
$row = mysqli_fetch_assoc($result);



?>

<tr>

<td style="width:219px" class="auto-style7"> <?php echo ($row['name']); ?></td>
<td style="width:220px" class="auto-style7"> <?php echo ($row['hoursWorks']); ?></td>
<td style="width:220px" class="auto-style7"> <a href=<?php echo ($row['commission']); ?></td>
<td style="width:220px" class="auto-style7"><?php echo ($row['pay']); ?></td>

</tr>

<?php
echo '</p>';
}
?>

</table>


</body>

</html>
