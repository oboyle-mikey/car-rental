<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	font-size: x-large;
}
</style>
<?PHP
	session_start();
	if($_SESSION['login'] != "T")
	{
		header("Location: login.php");
	}
?>
</head>

<body>


<form method="post" style="height: 379px" action="changePasswordPost.php">

	<span class="auto-style1">Change Password</span><br />
	<br />
	<?php echo $_SESSION['wrong_password']; ?><br />
	<br />
	Old Password: &nbsp; <input name="old_password" type="password" /><br />
	New Password:&nbsp; <input name="new_password" type="password" /><br />
	<input name="Submit1" type="submit" value="submit" /><br />
	<br />
	<br />
</form>


</body>

</html>
