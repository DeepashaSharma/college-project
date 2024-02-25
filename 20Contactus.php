<html>
<head>
<title>Blood Bank</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.css"/>
<script src="js/bootstrap.min.js"></script>               <!--all the above script and style are used for bootstrap---><!--which is used for menu bar-->
<link rel="stylesheet" href="w3css/w3.css">                   <!--link for using cs animation without net--><!--here it is used for responsive web page design-->
<style>
*
{
	margin:0px;
	padding:0px;
}
#menu ul                                                                    
{
	list-style:none;                                                         
}
#menu ul li
{
    background-color:33CC00;	
	border:1px solid white;
	width:150px;                                                           
	height:45px;
	float:left;
	text-align:center;
	line-height:45px;
	position:relative;
	border-radius:8px;
}
#menu ul li a
{
	text-decoration:none;
	color:white;
	display:block;
}
#menu ul li a:hover
{
	background-color:336600;
	border-radius:8px;
}
#menu ul ul
{ 
    position:absolute;
	display:none;
}
#menu ul li:hover > ul
{
	display:block;
}
h2
{
	color:336600;
}
.btn-block
{
	height:40px;
	width:120px;
	background-color:green;
	color:white;
	border-radius:10px;
}

/*animation for fly the div starts*/

#fly{
    width: 100px;
    height: 100px;
    position: relative;
    animation: myfirst 5s infinite;
    animation-direction: alternate;
}


@keyframes myfirst
 {
0%{left:1000px; top:0px}
100%{left:1000px; top:1200px}
}

/*animation for fly the div ends*/

#one,#two{
    max-width: 100%;
    height: auto;
} 


</style>
</head>
<body>

<div>
   <center> <img src="Images/2.jpg" height="110" width="800" id="one"></center>
   </div>

<table border="0" align="center">
<tr>
<td>
<div id="menu">
   <ul>
      <li><a href="1Home.php">Home</a>
	      <ul>
			      <li><a href="2Aboutus.php">About us</a></li>
		 </ul>
	  </li>
	  <li><a href="3Wgb.php">Why give blood</a>
	          <ul>
			      <li><a href="4Tnfb.php">The need for blood</a></li>
				  <li><a href="5Hbiu.php">How blood is used</a></li>
				  <li><a href="6Wych.php">Who you could help</a></li>
			  </ul>
	  </li>
	  <li><a href="7Wcgb.php">Who can give blood</a>
	           <ul>
				  <li><a href="8Dad.php">Donors and disability</a></li>
			  </ul>
	  </li>
	  <li><a href="9Dp.php">Donation process</a>
	          <ul>
			      <li><a href="10Ro.php">Registering online</a></li>
				  <li><a href="11Ptgb.php">Preparing to give blood</a></li>
				  <li><a href="12Whod.php">What happens at day</a></li>
				  <li><a href="13Ayd.php">After your donation</a></li>
			  </ul>
	  </li>
	  <li><a href="14Blood.php">Blood</a>
              <ul>
			      <li><a href="15Wnb.php">Who need blood</a></li>
				  <li><a href="16Mnb.php">Most needed blood</a></li>
			 </ul>	  
	  </li>
	   <li><a href="19Jwus.php">Join with us</a></li>
      <li><a href="20Contactus.php">Contact us</a></li>
  
   </ul>
</div>
</td>
</tr>
</table>
<br><br><br><br>

<div id=fly> <a href="30Madatry.php"><img src="Images/p1.PNG"></a></div>

<div>
        <center><img src="Images/1.jpg" width="1100" id="two"></center>
</div>
<hr/>

<div class="row">
 <div class="col-md-1">
 </div>

 <div class="col-md-7"> 
     <p align="center"> 
	 <u><font size=20 color=336600>Contact us</font></u><br>
	   <font size=5 color=009900>  SanjeevaniBloodBank.com<br>
         No:94, TVH Beliciaa Towers,10th Floor, Tower 2, MRC Nagar,<br>
         Mandaveli, Chennai - 600 028. Tamilnadu, India.<br>
         Phone: 044-24631500<br><br>

         Email: savealife@sanjeevanibloodbank.com</font>
    </p>
    </div>

	<div class="col-md-3">
	<marquee direction="down" height=500 ><img src="Images/50.jpg"></marquee>
   </div>
    
</div>
<br><br>

<div class="row">
 <div class="col-md-1">
 </div>
 
 <div class="col-md-3">
  	<image src="Images/54.jpg" align="left"/>
                   <br>   <font color="336600" size=5px><u>Latest News</u></font>
	<marquee direction="up">Blood Donation camp <br> coming soon</marquee>				  
</div>
  
 <div class="col-md-3">
  <image src="Images/55.jpg" align="left"/>
                <font color="336600" size=5px><u>Donate Blood</u></font><br><br>
   <image src="Images/56.jpg"/>
</div>
  
 <div class="col-md-3">
  <image src="Images/57.jpg"align="left">
               <font color="336600" size=5px><u>Register as a blood donor</u></font><br><br>
	<image src="Images/58.jpg"/>		   
  </div>
    
</div>


<hr style="width:50%; height:10px"/>
</body>
</html>
