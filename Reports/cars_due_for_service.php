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


<p class="auto-style1">The following cars are due for service</p>



<?php

include ("detail.php"); 




$query = "Select fleet_ID, model, maintanance_interval, miles_since_maintanance, car_registration FROM fleet where miles_since_maintanance > maintanance_interval";
$result = $db->query($query);
$num_results = mysqli_num_rows ($result);

?>


<table align="center">

<tr>

<th style="width:219px; height: 23px;" class="auto-style7"> Fleet ID </th>
<th style="width:220px; height: 23px;" class="auto-style4"> model</th>
<th style="width:220px; height: 23px;" class="auto-style4"> Registration</th>
<th style="width:220px; height: 23px;" class="auto-style4"> Miles Since Last Maintanance</th>

</tr>

<?php

for ($i=0; $i <$num_results; $i++)
{
$row = mysqli_fetch_assoc($result);

?>

<tr>

<td style="width:219px" class="auto-style7" align="center"> <?php echo ($row['fleet_ID']); ?></td>
<td style="width:220px" class="auto-style7" align="center"> <?php echo ($row['model']); ?></td>
<td style="width:220px" class="auto-style7" align="center"> <?php echo ($row['car_registration']); ?></td>
<td style="width:220px" class="auto-style7" align="center"> <?php echo ($row['miles_since_maintanance']); ?></td>

</tr>

<?php
echo '</p>';
}
?>

</table>


</body>

</html>
