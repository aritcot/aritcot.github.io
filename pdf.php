<html>
<head>
<title>PDF</title>
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
  .container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
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
  <p>Admin Page</p> 
</div>

<div class="container" style="padding-top:50px">
<h2>Monitor List</h2>
<form class="form-inline" method="post" action="dompdf/monitor_report.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
Generate PDF</button>
</form>
</fieldset>
</div>

<div class="container" style="padding-top:50px">
<h2>Maintenance List</h2>
<form class="form-inline" method="post" action="dompdf/maintenance_report.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
Generate PDF</button>
</form>
</fieldset>
</div>
 
 
</body>
</html>
