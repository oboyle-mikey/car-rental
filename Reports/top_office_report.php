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

<p class="auto-style5" style="width: 222px; height: 29px">Revenue By Office</p>

<table align="center">

<?php
include ("detail.php"); 


$query = "select offices.address, offices.manager, offices.sales, employees.employee_ID, employees.name FROM employees, offices WHERE employees.employee_ID = offices.manager";
$result = $db->query($query);

$num_results = mysqli_num_rows ($result);

?>

<tr>

<th style="width:220px" class="auto-style7"> Office</th>
<th style="width:220px" class="auto-style7"> Manager</th>
<th style="width:220px" class="auto-style7"> Total Sales</th>

</tr>

<?php

for ($i=0; $i <$num_results; $i++)
{
$row = mysqli_fetch_assoc($result);
$totalRevenue = $totalRevenue + $row['sales'];
?>

<tr>

<td style="width:219px" class="auto-style7" align = "center"> <?php echo ($row['address']); ?></td>
<td style="width:220px" class="auto-style7" align = "center"> <?php echo ($row['name']); ?></td>
<td style="width:220px" class="auto-style7" align = "center"> <?php echo ($row['sales']); ?>


</tr>

<?php
echo '</p>';
}
?>



</table>

<?php

if($num_results != 0)
{
	echo ("The total revenue is ". $totalRevenue. " Euro");
}

?>

</body>

</html>