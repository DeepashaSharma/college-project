<html>
<head>
<title>Blood Bank</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.css"/>
<script src="js/bootstrap.min.js"></script>         <!--all the above script and style are used for bootstrap---><!--which is used for menu bar-->
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
100%{left:1000px; top:1500px}
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
<font size=6 font color=336600>The need for blood</font><br><br>
We need to make sure that we have enough supplies of all blood groups and blood types to treat all types of conditions.<br><br>
By giving blood, every donor helps us meet the challenge of providing life-saving products whenever and wherever they are needed.<br><br>

<font size=5 font color=336600>Maintaining the blood supply</font><br><br>
We need to maintain a regular supply of all blood groups and types so we can provide it to the hospitals and patients who need it.<br><br> 
Some rare sub-types are more common in Black communities, which is why we need more blood donors from Black, Asian and minority ethnic communities.<br><br> 
We sometimes need to target specific blood types to increase stock levels. That's why we sometimes contact regular donors with the particular blood type we need, and ask them to give blood.<br><br>
We are indebted to our regular blood donors for their role in helping us to save lives.<br><br>

<font size=5 font color=336600>Rare blood types</font><br><br>
O Rh negative blood is rare but essential because it is the only blood type that can be given to anyone, regardless of their blood type.<br><br>
Donors with the blood group B Rh positive are more often found in Black and south Asian minority ethnic communities.<br><br>
Similarly, some rare subtypes, such as Ro, are more common in Black communities.<br><br>

<font size=5 font color=336600>Blood components</font><br><br>
Your blood's main components are red cells, plasma and platelets. These are used to treat many different illnesses and conditions.<br><br>
They have a short shelf life, so we always need to top up the supply:<br><br>

    red blood cells can be stored for up to 35 days<br>
    platelets can be stored for up to 7 days<br>
    plasma can be stored for up to 3 years<br>
 	</div>
	
	<div class="col-md-3">
	<marquee direction="down" height=900 ><img src="Images/50.jpg"></marquee>
	</div>
	
</div>
<br><br><br>


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