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

<p class="auto-style5" style="width: 222px; height: 29px">Reservations Report</p>


<span class="auto-style7">




Enter reporting start date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<input name="Text1" type="text" value="20/12/2017" class="auto-style7" /><br class="auto-style7" />
<br class="auto-style7" />
<span class="auto-style7">Enter reporting end date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<input name="Text2" type="text" value="20/1/2018" class="auto-style7" /><br class="auto-style7" />
<br class="auto-style7" />


<table align="center">

<tr>

<th style="width:220px" class="auto-style7"> Customer Name </th>
<th style="width:220px" class="auto-style7"> Car Registration</th>
<th style="width:220px" class="auto-style7"> Reservation Number</th>
<th style="width:220px" class="auto-style7"> Cost of Rental </th>

</tr>

<tr>

<td style="width:220px" class="auto-style7"> Freddy Fisher</td>
<td style="width:220px" class="auto-style7"> 171-D-36555</td>
<td style="width:220px" class="auto-style7"> 542198</td>
<td style="width:220px" class="auto-style7"> €2300.00</td>

</tr>

<tr>

<td style="width:220px" class="auto-style7"> Harry Goodie</td>
<td style="width:220px" class="auto-style7"> 171-D-28534</td>
<td style="width:220px" class="auto-style7"> 521478</td>
<td style="width:220px" class="auto-style7"> €900.00</td>

</tr>
<tr>

<td style="width:220px; height: 23px;" class="auto-style7"> James Dawson</td>
<td style="width:220px; height: 23px;" class="auto-style7"> 171-D-03943</td>
<td style="width:220px; height: 23px;" class="auto-style7"> 632145</td>
<td style="width:220px; height: 23px;" class="auto-style7"> €1300.00</td>
</tr>

</table>

</body>

</html>