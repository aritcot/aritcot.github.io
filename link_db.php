<!DOCTYPE html>
<html>
<head>
<title>Configuration</title>
</head>
<body>
<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'efwc';

 

$conn = mysqli_connect($hostname,  $username,  $password, $database) or die('Connecting to MySQL failed');

echo 'database connected';
?>
</body>
</html>