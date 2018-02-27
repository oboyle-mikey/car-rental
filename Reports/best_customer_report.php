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


<p class="auto-style5" style="width: 222px; height: 29px">Best Customer</p>

<table align="center">

<tr>

<th style="width:219px" class="auto-style7"> Customer Name </th>
<th style="width:220px" class="auto-style7"> County</th>
<th style="width:220px" class="auto-style7"> Email Address</th>
<th style="width:220px" class="auto-style7"> Total Spend on Rental </th>

</tr>

<tr>

<td style="width:219px" class="auto-style7"> Colin Henry</td>
<td style="width:220px" class="auto-style7"> Dublin</td>
<td style="width:220px" class="auto-style7"> <a href="mailto:colin_dublin@henryltd.ie">
colin-dublin@henryltd.ie</a></td>
<td style="width:220px" class="auto-style7"> €400.00</td>

</tr>

<tr>

<td style="width:219px" class="auto-style7"> Freddy Fisher</td>
<td style="width:220px" class="auto-style7"> Galway</td>
<td style="width:220px" class="auto-style7"> <a href="mailto:fredfish@tcd.ie">fredfish@tcd.ie</a></td>
<td style="width:220px" class="auto-style7"> €300.00</td>

</tr>

<tr>

<td style="width:219px; height: 23px;" class="auto-style7"> Harry Goodie</td>
<td style="width:220px; height: 23px;" class="auto-style7"> Louth</td>
<td style="width:220px; height: 23px;"> g<span class="auto-style7"><a href="mailto:GoogieTwoShoes@gmail.com">oodieTwoShoes@gmail.com</a></span></td>
<td style="width:220px; height: 23px;" class="auto-style7"> €652.50</td>

</tr>

<tr>

<td style="width:219px; height: 23px;" class="auto-style7"> James Dawson</td>
<td style="width:220px; height: 23px;" class="auto-style7"> Mayo</td>
<td style="width:220px; height: 23px;" class="auto-style7"> <a href="mailto:james-james@tcd.ie">
james-james@tcd.ie</a></td>
<td style="width:220px; height: 23px;" class="auto-style7"> €250.50</td>
</tr>

<tr>

<td style="width:219px; height: 23px;"> </td>
<td style="width:220px; height: 23px;"> </td>
<td style="width:220px; height: 23px;" class="auto-style7"> <strong>Total Revenue</strong></td>
<td style="width:220px; height: 23px;" class="auto-style7"> <strong>€1,603.00</strong></td>

</tr>

</table>

</body>

</html>