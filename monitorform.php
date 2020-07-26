<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>SEFWC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  .jumbotron {
	
      background-color: transparent;
      color: #000000;
      padding: 100px 52px;
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

 .dropdown-menu li a {
    color: #000 !important;
  }
  </style>
</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="new 1.html">SEFWC</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
		<a class="navbar-brand" href="main.php">HOME</a>  
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">INFO
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="usermanual.php">User Manual</a></li>
            <li><a href="sessionform.html">Tracking Record</a></li>
			<li><a href="sessionform.html">Ratio</a></li>
          </ul></li>
		 
		  
		  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MAINTENANCE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="maintenancetable.php">Record</a></li>
            <li><a href="maintenanceform.php">Form</a></li>
			 </ul></li>
		  
		<li><a href="muatable.php">ADMIN</a></li> 
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="jumbotron text-center">
  <h1>SEFWC</h1> 
  <p>MONITOR FORM</p> 
 
</div>

    

<div class="container">
<form action = "monitor3.php" method = "post" enctype = "multipart/from-data" name="form1">
<div class="form-group">
    <label for="machineID">ID Machine:</label>
    <input type="number" class="form-control" name="machineID" id="machineID">
  </div>
  
<div class="form-group">
    <label for="compostID">ID Compost:</label>
    <input type="number" class="form-control" name="compostID" id="compostID">
  </div>
  
<div class="col-sm-6" style="background-color:white;">
<div class="form-group">
    <label for="din">Date In:</label>
    <input type="date" class="form-control" name="din" id="din">
  </div></div>
  
<div class="col-sm-6" style="background-color:white;">
<div class="form-group">
    <label for="tin">Time In:</label>
    <input type="time" class="form-control" name="tin" id="tin">
  </div></div>
  
<div class="col-sm-6" style="background-color:white;">
<div class="form-group">
    <label for="dout">Date Out:</label>
    <input type="date" class="form-control" name="dout" id="dout">
  </div></div>
  
<div class="col-sm-6" style="background-color:white;">
<div class="form-group">
    <label for="tout">Time Out:</label>
    <input type="time" class="form-control" name="tout" id="tout">
  </div></div>

  <div class="form-group">
  <label for="sisaMakanan">Sisa Makanan:</label>
  <select class="form-control" name= "sisaMakanan" id="sisaMakanan">
    <option>Yes</option>
    <option>No</option>
	</select>
</div>

  <div class="form-group">
  <label for="sisaDapur">Sisa Dapur:</label>
  <select class="form-control" name= "sisaDapur" id="sisaDapur">
    <option>Yes</option>
    <option>No</option>
	</select>
</div>

  <div class="form-group">
  <label for="habukKelapa">Habuk Kelapa:</label>
  <select class="form-control" name= "habukKelapa" id="habukKelapa">
    <option>Yes</option>
    <option>No</option>
	</select>
</div>

  <div class="form-group">
  <label for="serbukKayu">Serbuk Kayu:</label>
  <select class="form-control" name= "serbukKayu" id="serbukKayu">
    <option>Yes</option>
    <option>No</option>
	</select>
</div>

  <div class="form-group">
  <label for="kulitBuahan">Kulit Buahan:</label>
  <select class="form-control" name= "kulitBuahan" id="kulitBuahan">
    <option>Yes</option>
    <option>No</option>
	</select>
</div>

  <div class="form-group">
  <label for="kulitTelur">Kulit Telur:</label>
  <select class="form-control" name= "kulitTelur" id="kulitTelur">
    <option>Yes</option>
    <option>No</option>
	</select>
</div>

  <div class="form-group">
  <label for="daunReput">Daun Reput:</label>
  <select class="form-control" name= "daunReput" id="daunReput">
    <option>Yes</option>
    <option>No</option>
	</select>
</div>

<br></br>
  
<button name="SUBMIT" type="SUBMIT" class="btn btn-default">SUBMIT</button><br></br>


 
  

</div>
</form>
</body>
</html>
