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
    <a class="active" href = "loginHome.php">Home</a>
</div>

<form method="post" style="height: 100px" action="loginCheck.php">

<h2>Enter Your Login Details</h2>

   <table style="width: 28%; height: 100px">
   <tr>
   <td style="width: 130px">Employee ID</td>
   <td class="auto-style15" style="width: 261px">
   <select name="reservation_ID" style="width: 150px">
       <?php 
           include("detail.php");
           $sql = "SELECT * FROM employees ";
           $result = $db->query($sql);
   
           while($row = mysqli_fetch_assoc($result)) {
          ?>
   
           <option value="<?php echo $row['employee_ID'];?>"> <?php echo $row['name'];?>  </option>
   
       <?php
       }
       ?>
               
   </select>
   </td>
   
   </tr>
        <tr>
            <td style="width: 130px">Password</td>
            <td style="width: 253px">
                <input name="password" type="password" required/></td>
        </tr>
    </table>
    
    
        <input name="Button1" type="submit" value="Log-In" />
        <input name="Button2" type="reset" value="Reset" />
</form>

</body>

</html>