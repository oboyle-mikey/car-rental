<?php

$host = "localhost";

$database = "hrs_db";

$user = "root";

$password = "eexee0Oo";




@ $db = mysqli_connect($host, $user, $password, $database);

$db->select_db($database);


if (mysqli_connect_errno())
{
echo 'Error connecting to the db.';
exit;
}


?>
