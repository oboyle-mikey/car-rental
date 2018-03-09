<?php 
session_start();
if($_SESSION['login'] != "T")
{
	header("Location: login.php");
}

    session_destroy();
    header('Location: login.php');
?>