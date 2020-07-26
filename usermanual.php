<html>
<head>
<title>User Manual</title>
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
      <a class="navbar-brand" href="new 1.html">Back</a>
    </div>
    
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>SEFWC</h1> 
  <p>User Manual</p> 
</div>

 <div class="w3-container">
 <br/>
   <div class="w3-card-4" style="width:50%">
     <div class="w3-container w3-center">
       <p>Any problem? You can contact us!<br/><br/>Aritcot Airlines Sdn Bhd<br/><br/>Office Address: F-G-13A, Plaza Arkadia, 3, Jalan Intisari Perdana, Desa Park City, 52200, Kuala Lumpur, W.P Kuala Lumpur, Malaysia.<br/><br/>
	    Call us: +013 339 1139 / 03 – 6411 7339<br/><br/>Email: aritcotairlines@gmail.com<br/><br/> Business Hour: Mon – Sat : 9:00 am to 9:30 pm</p>
     </div>
   </div>
 </div>

 <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}



//the moving images
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>
 
</body>
</html>
