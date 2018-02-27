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

<?php include('navbar.php') ?>


<h2>Promotional Message</h2>


<form method="post" style="height: 379px" action="employeesPost.php">


<table style="width: 28%; height: 322px">
<tr>
<td style="width: 130px">Message</td>
<td style="width: 253px">
    &nbsp;<form method="post">
        <textarea cols="20" name="Description" rows="6" required></textarea></form></td>
</tr>
	
	</table>

	<input name="Button1" type="submit" value="Submit" />
	<input name="Button2" type="reset" value="Reset" />
	
	
</form>

	
	
</form>


</body>

</html>