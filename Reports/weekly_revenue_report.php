<?php

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



</body>

</html>


<p class="auto-style1"><strong>Weekly Revenue By Car</strong></p>

<form method="post">
	<div class="auto-style3">
		<span class="auto-style4">Enter reporting start date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>
		<input name="start_date" type="text" class="auto-style4" value="20/12/2017" /><br class="auto-style4" />
	</div>
	<div class="auto-style3">
		<span class="auto-style4">Enter reporting start end:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>
		<input name="end_date" type="text" class="auto-style4" value="20/01/2018" /></div>

</form>



<table align="center">
<tr>

<th style="width:220px; height: 23px;" class="auto-style4"> Car Registration</th>
<th style="width:220px; height: 23px;" class="auto-style4"> Number of Days Rented </th>
<th style="width:220px; height: 23px;" class="auto-style4"> &nbsp;Revenue</th>

</tr>

<tr>

<td style="width:220px" class="auto-style4">171-D-36555</td>
<td style="width:220px" class="auto-style4">14</td>
<td style="width:220px" class="auto-style4">
<span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
€</span>2300.00</td>

</tr>

<tr>

<td style="width:220px" class="auto-style4">171-D-14483</td>
<td style="width:220px" class="auto-style4">28</td>
<td style="width:220px" class="auto-style4">
<span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
€</span>4600.00</td>

	</tr>

<tr>

<td style="width:220px" class="auto-style4">171-D-28534</td>
<td style="width:220px" class="auto-style4">7</td>
<td style="width:220px" class="auto-style4">
<span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
€</span>900.00</td>

</tr>

<tr>

<td style="width:220px" class="auto-style4">171-D-03943</td>
<td style="width:220px" class="auto-style4">9</td>
<td style="width:220px" class="auto-style4">
<span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
€</span>1300.00</td>

</tr>


<tr>

<td style="width:220px" class="auto-style4">&nbsp;</td>
<td style="width:220px" class="auto-style5"><strong>Total Revenue</strong></td>
<td style="width:220px" class="auto-style4">
<span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
€</span>9100.00</td>

</tr>


</table>



</body>

</html>
