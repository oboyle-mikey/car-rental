<?php

    session_start();
    include('detail.php');
    $query = "SELECT email FROM clients Order By totalIncome LIMIT 5";
    $result = $db->query($query);
   
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


<h2>Message Top Clients</h2>


<form method="post" style="height: 379px" action="employeesPost.php">


<table style="width: 28%; height: 100px">
<tr>
<td style="width: 130px">Message</td>
<td style="width: 253px">
    &nbsp;<form method="post">
        <textarea cols="20" name="Description" rows="6" required></textarea></form></td>
</tr>
	
</table>

<input name="Button1" type="submit" value="Send" />

<h2>Mail List</h2>

<table style="width: 28%; height: 322px">

<?php

while($row = mysqli_fetch_assoc($result)) {

?>


    <p> <?php echo $row['email'];?> </p>


<?php
}
?>
</table>
	


</body>

</html>