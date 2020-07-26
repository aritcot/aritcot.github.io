<?php
// Includes Login Script
include("login.php");
error_reporting(E_ALL ^ E_NOTICE);
$error=$_GET['error'];
if(isset($_SESSION['login_user'])){
header("location: main.php"); // Redirecting To Other Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body background="loginpage.png"></center>
<div id="main">
<h1></h1><br>
<div id="login">
<h2 style="font-size:60px; text-align:center; color:#D462FF;"></h2><br><br><br><br><br><br>
<form action="" method="post">
<center><label style="font-size:30px;">Username :</label>
<input id="compostID" name="compostID" placeholder="Username" type="text" style="font-size:25px;"><br><br>
<label style="font-size:30px;">Password  :</label>
<input id="password" name="password" placeholder="**********" type="password" style="font-size:25px;"> <br><br>
<input name="submit" type="submit" value="Login " style="font-size:25px;">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>