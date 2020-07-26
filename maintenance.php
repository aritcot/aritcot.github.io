<!DOCTYPE html>
<html>
<head>
<title>SEFWC</title>
</head>
<body>
<?php 
include ('link_db.php'); 
$machineID = $_POST['machineID'];
$maintenanceID = $_POST['maintenanceID'];
$report_date = $_POST['report_date'];
$issue = $_POST['issue'];
$query ="insert into maintenance(machineID,maintenanceID,report_date,issue) values ('$machineID','$maintenanceID','$report_date','$issue')";
if (mysqli_query($conn, $query)) {
  echo "<center><p><img src=\"$target_file\" width=\"190\" height=\"200\"><p>";
  echo "Harga :".$machineID."<br>";
  echo "Deposit :".$maintenanceID."<br>";
  echo "Tahun :".$report_date."<br>";
  echo "Kadar :".$issue."<br>";
 
  
    echo "New record created successfully";
	//echo "<a href=\"003data_tbl.php\">  list</a>"; 
	header("location: maintenancetable.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
</body>
</html>