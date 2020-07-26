<!DOCTYPE html>
<html>
<head>
<title>SEFWC Form</title>
</head>
<body>
<?php 
include ('link_db.php'); 
$machineID = $_POST['machineID'];
$compostID = $_POST['compostID'];
$din = $_POST['din'];
$tin = $_POST['tin'];
$dout = $_POST['dout'];
$tout = $_POST['tout'];
$sisaMakanan = $_POST['sisaMakanan'];
$sisaDapur = $_POST['sisaDapur'];
$habukKelapa = $_POST['habukKelapa'];
$serbukKayu = $_POST['serbukKayu'];
$kulitBuahan = $_POST['kulitBuahan'];
$kulitTelur = $_POST['kulitTelur'];
$daunReput = $_POST['daunReput'];

$query ="insert into compost (machineID,compostID,din,tin,dout,tout,sisaMakanan,sisaDapur,habukKelapa,serbukKayu,kulitBuahan,kulitTelur,daunReput) values ('$machineID','$compostID','$din','$tin','$dout','$tout','$sisaMakanan','$sisaDapur','$habukKelapa','$serbukKayu','$kulitBuahan','$kulitTelur','$daunReput' )";
if (mysqli_query($conn, $query)) {
  echo "<center><p><img src=\"$target_file\" width=\"190\" height=\"200\"><p>";
  echo "Harga :".$machineID."<br>";
  echo "Harga :".$compostID."<br>";
  echo "Deposit :".$din."<br>";
  echo "Tahun :".$tin."<br>";
  echo "Kadar :".$dout."<br>";
  echo "Harga :".$tout."<br>";
  echo "Deposit :".$sisaMakanan."<br>";
  echo "Tahun :".$sisaDapur."<br>";
  echo "Kadar :".$habukKelapa."<br>";
  echo "Harga :".$serbukKayu."<br>";
  echo "Deposit :".$kulitBuahan."<br>";
  echo "Tahun :".$kulitTelur."<br>";
  echo "Kadar :".$daunReput."<br>";
  
    echo "New record created successfully";
	
	header("location: monitortable.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
</body>
</html>