<!DOCTYPE html	>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
 <script src="j\jquery-3.2.1.min.js.js"></script>
  
  <link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.css"/>
<script src="js/bootstrap.min.js"></script>  
  </head>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 80%;
      margin: auto;
  }
  
  /*css for menu bar start*/
    .icon-bar
  {
	   background-color:#336600;
  }
.navbar
  {
	  background-color:#33CC00;
	  border-radius:10px;
	  width:90%;
}

.nav li a
{
	 color:white;
	 text-align:center;
	 width:165px;                                                           
	 height:45px;
}

.nav li a:hover
{
	 background-color:#336600;
}
.dropdown-menu
{
	 background-color:#33CC00;  border-radius:10px;
}
.dropdown-menu li a:hover
{
	background-color:#336600;
}

 /*css for menu bar ends*/
  </style>

<body>

<center>
<nav class = "navbar " role = "navigation">
   
     <div class = "navbar-header">
         <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#example-navbar-collapse">
           <span class = "sr-only">Toggle navigation</span>
           <span class = "icon-bar"></span>
           <span class = "icon-bar"></span>
           <span class = "icon-bar"></span>
        </button>
     </div>
   
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	    <ul class = "nav navbar-nav">
              <li class="dropdown"><a href = "" class = "dropdown-toggle" data-toggle = "dropdown">Section1<b class = "caret"></b></a>
			  			    <ul class = "dropdown-menu">
							   <li><a href="1Home.php">Home</a></li>
                               <li><a href="2Aboutus.php">About us</a></li>
                             </ul>
           	  </li>
              <li class="dropdown"><a href = "" class = "dropdown-toggle" data-toggle = "dropdown">Section2<b class = "caret"></b></a>
			                 <ul class = "dropdown-menu">
							   <li><a href="3Wgb.php">Why give blood</a></li> 
                               <li><a href="4Tnfb.php">The need for blood</a></li>
				               <li><a href="5Hbiu.php">How blood is used</a></li>
				               <li><a href="6Wych.php">Who you could help</a></li>
                             </ul>
			  </li>
			  <li class="dropdown"><a href = "" class = "dropdown-toggle" data-toggle = "dropdown">Section3<b class = "caret"></b></a>
			                 <ul class = "dropdown-menu">
							   <li><a href="7Wcgb.php">Who can give</a></li>
                               <li><a href="8Dad.php">Donors and disability</a></li>
                             </ul>
			  </li>
			  <li class="dropdown"><a href = "" class = "dropdown-toggle" data-toggle = "dropdown">Section4<b class = "caret"></b></a>
			                 <ul class = "dropdown-menu">
							   <li><a href="9Dp.php">Donation process</a></li>
			                   <li><a href="10Ro.php">Registering online</a></li>
				               <li><a href="11Ptgb.php">Preparing to give blood</a></li>
				               <li><a href="12Whod.php">What happens at day</a></li>
				               <li><a href="13Ayd.php">After your donation</a></li>
			                </ul>
			  </li>
			  <li class="dropdown"><a href = "" class = "dropdown-toggle" data-toggle = "dropdown">Section5<b class = "caret"></b></a>
			               <ul class = "dropdown-menu">
                              <li><a href="14Blood.php">Blood</a></li>
 			                  <li><a href="15Wnb.php">Who need blood</a></li>
				              <li><a href="16Mnb.php">Most needed blood</a></li>
			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Section6<b class = "caret"></b></a>
			               <ul class = "dropdown-menu">
                              <li><a href="19Jwus.php">Join with us</a></li>
 			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Section7<b class = "caret"></b></a>
	                   <ul class = "dropdown-menu">
                              <li><a href="20Contactus.php">Contact us</a></li>
 			              </ul>	 
			  </li>
         </ul>
   </div>
   
</nav>
</center>

<br><br><br><br><br><br><br><br><br><br>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Images/51.jpg"  width="460" height="345">
      </div>

      <div class="item">
        <img src="Images/52.jpg" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="Images/53.jpg"  width="460" height="345">
      </div>

      <div class="item">
        <img src="Images/img63.png" width="460" height="345">
      </div>
    
	  <div class="item">
        <img src="Images/img68.jpg" width="460" height="345">
      </div>
    
	</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<br><br>

	<div class="vertical_line"></div>
	<style>
	.vertical_line
	{
		background:#000;
		height:150px;
		width:1px;
	}
	</style>



</body>
</html>
