<?php

$host = "localhost";

$database = "st3001_1718_group_3_db";

$user = "group_3";

$password = "vaeF9eip";




@ $db = mysqli_connect($host, $user, $password, $database);

$db->select_db($database);


if (mysqli_connect_errno())
{
echo 'Error connecting to the db.';
exit;
}


?>
