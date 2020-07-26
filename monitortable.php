<html>
<head>
<title>Monitor</title>
<link rel="stylesheet" type="text/css" href="../menu/pro_dropdown_3/pro_dropdown_3.css" />
<script src="../menu/pro_dropdown_3/stuHover.js" type="text/javascript"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
   <style>

 .jumbotron {
	  background-image: url("11.jpg");
    
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: 100%;
      background-color: #FFFFFF;
      color: #000000;
      padding: 50px 10px;
      font-family: Montserrat, sans-serif;
  } 
   .navbar {
      margin-bottom: 0;
      background-color: #000000;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #F08080 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: white;
      color: #fff !important;
  }
   </style>
   
</head>

<body>
<?PHP

//include ('../menu/main.php'); 
include ('link_db.php'); 
$sql="SELECT * from compost ORDER BY compostID ASC";
$result = mysqli_query($conn,$sql) or die(mysql_error());

?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="main.php">Back</a>
    </div>
    
  </div>
</nav>
<div class="jumbotron text-center">
  <h1>SEFWC</h1> 
  <p>Monitor Table</p> 
</div>

<div class="container">
<P><strong><center> </center>  
<table class="table table-hover" border="0" width="849" align="center" cellspacing="2" cellpadding="2">
  <thead>
<tr>
<td align="center" bgcolor="#f6f6f6"><strong>ID Machine</strong></td>
<td align="center" bgcolor="#f6f6f6"><strong>ID Compost</strong></td>
<td align="center" bgcolor="#f6f6f6"><strong>Date In</strong></td>
<td align="center" bgcolor="#f6f6f6"><strong>Time In</strong></td>
<td align="center" bgcolor="#f6f6f6"><strong>Date Out</strong></td>
<td align="center" bgcolor="#f6f6f6"><strong>Time Out</strong></td>
<td align="center" bgcolor="#f6f6f6"><strong>Sisa Makanan</strong></td>
<td align="center" bgcolor="#f6f6f6"><strong>Sisa Dapur</strong></td>
<td align="center" bgcolor="#f6f6f6"><strong>Habuk Kelapa</strong></td>
<td align="center" bgcolor="#f6f6f6"><strong>Serbuk Kayu</strong></td>
<td align="center" bgcolor="#f6f6f6"><strong>Kulit Buahan</strong></td>
<td align="center" bgcolor="#f6f6f6"><strong>Kulit Telur</strong></td>
<td align="center" bgcolor="#f6f6f6"><strong>Daun Reput</strong></td>

</tr>
 </thead>
<?PHP
while ($row=mysqli_fetch_array($result))
{
 echo "<tr>";
 $id=$row["compostID"];
 echo "<td>  " .$row["machineID"]. "</td>";
 echo "<td>  " .$row["compostID"]. "</td>";
 echo "<td>  " .$row["din"]."</td>";
 echo "<td>  " .$row["tin"].  "</td>";
 echo "<td>  " .$row["dout"]."</td>";
 echo "<td>  " .$row["tout"]."</td>";
 echo "<td>  " .$row["sisaMakanan"]."</td>";
 echo "<td>  " .$row["sisaDapur"].  "</td>";
 echo "<td>  " .$row["habukKelapa"]."</td>";
 echo "<td>  " .$row["serbukKayu"]."</td>";
 echo "<td>  " .$row["kulitBuahan"]."</td>";
 echo "<td>  " .$row["kulitTelur"]."</td>";
 echo "<td>  " .$row["daunReput"]."</td>";
}
echo "</table>";
echo "<center>";
echo "<br>";
echo "</div>";
?>
</body>
</html>
