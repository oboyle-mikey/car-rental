<?php

	session_start();

	if($_SESSION['login'] != "T")
	{
		header("Location: login.php");
	}

   
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


<h2>Client Management</h2>


<table style="width: 28%; height: 322px">
	<tr>
        <td>
	        <a href = "clientForm.php">New Client</a>
        </td>
	</tr>
    <tr>
        <td>
                <a href = "sendPromo.php">Client Targeting</a>
        </td>
	</tr>
	</table>
	
	
</form>


</body>

</html>