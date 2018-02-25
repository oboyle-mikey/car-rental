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

<div class = "topnav">
<a> Executive Cars Ltd</ab>
<a class="active" href = "Home.php">Home</a>
<?php 
        if($_SESSION['access']==1){
            echo '<a  href = "payrollForm.php">Payroll</a>';
            echo '<a  href = "fleetForm.php">Fleet</a>';
            echo '<a  href = "employeesForm.php">Employee</a>';
            echo '<a  href = "officeForm.php">Office</a>';
            echo '<a  href = "clientForm.php">Client</a>';
            echo '<a  href = "insights.php">Insights</a>';
            echo '<a  href = "reservationHome.php">Reservation</a>';
        }else{
            echo '<a  href = "clientForm.php">Client</a>';
            echo '<a  href = "reservationHome.php">Reservation</a>';
        }
?>
<a href = "logout.php">Logout</a>
</div>

<p class="auto-style5" style="width: 222px; height: 29px">Revenue By Office</p>

<table align="center">

<tr>

<th style="width:220px" class="auto-style7"> Office</th>
<th style="width:220px" class="auto-style7"> Address</th>
<th style="width:220px" class="auto-style7"> Manager</th>
<th style="width:220px" class="auto-style7"> Total Sales</th>

</tr>

<tr>

<td style="width:220px" class="auto-style7"> Dublin Airport</td>
<td style="width:220px" class="auto-style7"> Dublin Airport</td>

<td style="width:219px" class="auto-style7"> Harry Henry</td>
<td style="width:220px" class="auto-style7"> €6520.50</td>

</tr>

<tr>

<td style="width:220px" class="auto-style7"> Stephens Green</td>
<td style="width:220px" class="auto-style7"> Stephens Green</td>

<td style="width:219px" class="auto-style7"> Freda Dawson</td>
<td style="width:220px" class="auto-style7"> €4000.00</td>

</tr>



</table>

</body>

</html>