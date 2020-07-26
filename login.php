<?php
session_start(); // Starting Session
include("link_db.php");
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['compostID']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$compostID=$_POST['compostID'];
$password=$_POST['password'];
// To protect MySQL injection for Security purpose
$compostID = stripslashes($compostID);
$password = stripslashes($password);
$compostID = mysqli_real_escape_string($conn,$compostID);
$password = mysqli_real_escape_string($conn,$password);
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn,"select * from compost where password='$password' AND compostID='$compostID'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: main.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
header("location: index1.php?error=$error");
}
mysqli_close($conn); // Closing Connection
}
}
?>