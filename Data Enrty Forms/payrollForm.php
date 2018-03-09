<?php

<<<<<<< HEAD
	session_start();
	$_SESSION['pay_ID'] = "";
   #<form method="post" style="height: 379px" action="payrollPost.php">

=======
session_start();

if($_SESSION['login'] != "T")
{
	header("Location: login.php");
}
   
>>>>>>> a2b29b0ad5700faa84d45eb02733a65d15fc4a3b
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

<h2>Add Payroll</h2>
<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="regForm">



<table style="width: 28%; height: 101px">
	<tr>
		<td style="width: 130px">Employee ID</td>
		<td class="auto-style15" style="width: 261px">
		<select name="employee_ID" style="width: 150px">
			<?php 
				include("detail.php");
    			$sql = "SELECT * FROM employees ORDER BY name asc";
    			$result = $db->query($sql);
    
    		while($row = mysqli_fetch_assoc($result)) {
       		 	?>

					<option value="<?php echo $row['employee_ID'];?>"> <?php echo $row['employee_ID']. "  " .$row['name'];?> 
					</option>
 
<?php
	}
	$pay_ID = $_POST['employee_ID'];

?>
					</select><input name="getpay" type="submit" value="Calculate Pay" style="width: 94px" /></td>
					
			
	
	</tr>
	</table>

	&nbsp;</form>
	
	<?php	include("detail.php");
		if (isset($_POST['getpay']))
		{
			$_SESSION['pay_ID'] = $pay_ID;

			
		
			
				
			//calculates sales for the past month
			$sql = "SELECT SUM(price) as sales from reservations where employee_ID = '".$pay_ID."' and start_date between DATE_SUB(CURDATE(), interval 30 day) AND CURDATE()";
					$result = $db->query($sql);
					$sales = mysqli_fetch_assoc($result);
					$sales = $sales['sales'];
									
		
			// gets commission
			$sql = "SELECT commission from employees WHERE employee_ID = '".$pay_ID."'";
					$result = $db->query($sql);
					$commission_rate = mysqli_fetch_assoc($result);
					$commission_rate = $commission_rate['commission'];
					$commission = ($commission_rate/100)*$sales;
					
			//gets pay		
			$sql = "SELECT base_salery from employees WHERE employee_ID = '".$pay_ID."'";
					$result = $db->query($sql);
					$salary = mysqli_fetch_assoc($result);
					$salary = $salary['base_salery'];
					$pay = $commission + $salary/12;
		}
			?>
	
			<form method="post" style="height: 379px" action="payrollPost.php">
		
		
			<tr style="width: 130px">Monthly Salary
			<input name="pay" type="text" value="<?php echo $pay;  ?>"/>
			</tr>
			<input name="Submit1" type="submit" value="submit" />
		
			</form>
		

</body>

</html>

