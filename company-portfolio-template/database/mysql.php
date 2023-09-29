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

<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>