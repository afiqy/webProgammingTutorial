<?php
$HOST = "localhost";
$USERNAME = "root";
$PSW = "";
$DB_TABLE = "company_profile_tutorial";

$conn = mysqli_connect($HOST,$USERNAME,$PSW,$DB_TABLE) ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>