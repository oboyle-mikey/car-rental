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

<p class="auto-style5" style="width: 222px; height: 29px">Reservations Report</p>


<span class="auto-style7">



<form method="post" action="reservations_report.php">
<p class="auto-style1">Start Date</p>

<td style="width: 125px"></td>
<input name="Startdate" type="date" />


<p class="auto-style1">End Date</p>
<input name="Enddate" type="date" />

<input name="Submit" type="submit" value="Submit" /><input name="Reset" type="button" value="Reset" /></td>

</form>

<table align="center">

<?php

include ("detail.php"); 

$startdate  =  $enddate =  "";


$startDate = $_POST['Startdate'];
$endDate = $_POST['Enddate'];


$query = "select clients.name , fleet.car_registration, reservations.reservation_ID, reservations.price , reservations.start_date from reservations, fleet, clients Where '$startDate' <= reservations.start_date AND '$endDate' >= reservations.start_date AND reservations.fleet_ID = fleet.fleet_ID AND reservations.client_ID = clients.client_ID";
$result = $db->query($query);

$num_results = mysqli_num_rows ($result);

?>

<tr>

<th style="width:220px" class="auto-style7"> Customer Name </th>
<th style="width:220px" class="auto-style7"> Car Registration</th>
<th style="width:220px" class="auto-style7"> Reservation Number</th>
<th style="width:220px" class="auto-style7"> Cost of Rental </th>

</tr>
<?php

for ($i=0; $i <$num_results; $i++)
{
$row = mysqli_fetch_assoc($result);
$totalRevenue = $totalRevenue + $row['price'];
?>

<tr>

<td style="width:219px" class="auto-style7" align="center" > <?php echo ($row['name']); ?></td>
<td style="width:220px" class="auto-style7" align="center"> <?php echo ($row['car_registration']); ?></td>
<td style="width:220px" class="auto-style7" align="center"> <?php echo ($row['reservation_ID']); ?></td>
<td style="width:220px" class="auto-style7" align="center"> <?php echo ($row['price']) ?></td>

</tr>

<?php
echo '</p>';
}
?>


</table>

<?php

if($num_results != 0)
{
	echo ("The total weekly revenue is ". $totalRevenue. " Euro");
}

?>

</body>

</html>



