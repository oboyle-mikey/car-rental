<?php

	session_start();
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	text-align: left;
	font-size: x-large;
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
}
.auto-style3 {
	text-align: left;
}
.auto-style4 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
}
.auto-style7 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
}
.auto-style8 {
	font-size: medium;
}
.auto-style9 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
	font-size: medium;
}
</style>
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


<p class="auto-style1">Payroll by Office</p>

<form method="post">
	<div class="auto-style3">
		<span class="auto-style4">Enter office:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>
		<input name="office" type="text" class="auto-style4" value="Mayo" /></div>

</form>



<table align="center">
<tr>

<th style="width:219px; height: 23px;" class="auto-style7"> Employee Name </th>
<th style="width:220px; height: 23px;" class="auto-style4"> Hours Worked</th>
<th style="width:220px; height: 23px;" class="auto-style4"> Commission</th>
<th style="width:220px; height: 23px;" class="auto-style4"> Total Pay</th>

</tr>

<tr>

<td style="width:219px" class="auto-style7"> Harry Henry</td>
<td style="width:220px" class="auto-style4">14</td>
<td style="width:220px" class="auto-style9">
<span style="color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;" class="auto-style8">
€43</span><span class="auto-style8">00.00</span></td>

<td style="width:220px" class="auto-style4">
<span style="color: rgb(34, 34, 34); font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
€</span>23000.00</td>

</tr>

<tr>

<td style="width:219px" class="auto-style7"> Freda Dawson</td>
<td style="width:220px" class="auto-style4">28</td>
<td style="width:220px" class="auto-style9">
<span style="color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;" class="auto-style8">
€1332</span><span class="auto-style8">0.00</span></td>

<td style="width:220px" class="auto-style4">
<span style="color: rgb(34, 34, 34); font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
€</span>46000.00</td>

</tr>

<tr>

<td style="width:219px; height: 23px;" class="auto-style7"> Colin&nbsp; Goodie</td>
<td style="width:220px" class="auto-style4">7</td>
<td style="width:220px" class="auto-style9">
<span style="color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;" class="auto-style8">
€123</span><span class="auto-style8">00.00</span></td>

<td style="width:220px" class="auto-style4">
<span style="color: rgb(34, 34, 34); font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
€</span>90000.00</td>

</tr>

<tr>

<td style="width:219px; height: 23px;" class="auto-style7"> James Fisher</td>
<td style="width:220px" class="auto-style4">9</td>
<td style="width:220px" class="auto-style9">
<span style="color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;" class="auto-style8">
€</span><span class="auto-style8">3560.00</span></td>

<td style="width:220px" class="auto-style4">
<span style="color: rgb(34, 34, 34); font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
€</span>13000.00</td>

</tr>


</table>



</body>

</html>
