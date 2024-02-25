<html lang="en">
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
100%{left:1000px; top:700px}
}

/*animation for fly the div ends*/

#one{
    max-width: 100%;
    height: auto;
} 

marquee {
    width: 80%;
    margin: auto;
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
      <li><a href="22Donor.php">Home</a></li>
	  <li><a href="26Dnrwcdb.php">Who can donate blood</a></li>
	  <li><a href="27Dnrabtcamp.php">About Camps</a></li>
	  <li><a href="1Home.php">Logout</a></li>
   </ul>
 </div>
 </td>
 </tr>
 </table>
 <br><br>
 
 <div id=fly> <a href="30Madatry.php"><img src="Images/p1.PNG"></a></div>
 
 
 <img src="Images/17.png">
<marquee behavior="alternate" width=800><img src="Images/3.jpg" width=400></marquee>
<br>

<div style="overflow-x:auto;">   
<table align="center" border=1 width=1100 height=600>
<tr>
<td width=700 rowspan=3>
<font size=6 font color=336600>Who can give blood</font><br><br>
Most people can give blood. You can give blood if you are:<br><br>
   <img src="Images/img22.jpg"> fit and healthy<br>
   <img src="Images/img22.jpg">weigh over 7 stone 12 lbs or 50kg<br>
   <img src="Images/img22.jpg">aged between 17 and 66 (or 70 if you have given blood before)<br>
   <img src="Images/img22.jpg">over 70 and have given blood in the last two years<br><br>

<font size=5 font color=336600>How often can I give blood?</font><br><br>
    <img src="Images/img22.jpg">Men can give blood every 12 weeks and women can give blood every 16 weeks.<br><br>

<font size=6 font color=336600>Donors and disability</font><br><br>
   <p> <img src="Images/img22.jpg" align="left">Everyone can volunteer to give blood, whether they have a disability or not. However, we must make sure that it’s safe for people to give blood and for patients to receive donated blood.</p><br><br>

   <p> <img src="Images/img22.jpg" align="left">We need to be certain that anyone who wants to give blood understand what’s involved, how they will feel, and the things they’ll need to do afterwards to take care of themselves. If we think that someone doesn’t completely understand, we can’t let them give blood.</p>
</td>

<td width=400>
<marquee><img src="Images/60.jpg"></marquee>
</td>
</tr>

<tr>
<td width=400>
<marquee><img src="Images/60.jpg"></marquee>
</td>
</tr>

<tr>
<td width=400>
<marquee><img src="Images/60.jpg"></marquee>
</td>
</tr>
</table>
</div>

<br><br>

<div style="overflow-x:auto;">   
<table border="1" align="center" width="1100" height="100">
  <tr>
      <td width="366">
	  <h2 align="center">Tips on Blood Donation</h2><br>
	  	<p><img src="Images/62.jpg" align="left">
		You are noble but you got to be informed as well...<a href="18Todb.php"> >> </a> </p>
	  </td>
	  
	  <td width="366">
	  <h2 align="center">Blood facts</h2><br>
	  	<p><img src="Images/63.jpg" align="left">
		A whole world in itself, blood is living matter!...<a href="17bf.php"> >> </a></p>
	  </td>
	  
	  <td>
	  <h2 align="center">Related Links</h2><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.indianblooddonors.com">www.indianblooddonors.com</a><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.jeevan.org">www.jeevan.org</a><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.blooddonations.org">www.blooddonations.org</a><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.aabb.org">www.aabb.org</a><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.redcross.org">www.redcross.org</a>
	  </td>
  </tr>
</table>
<div>



<hr style="width:50%; height:10px"/>
</body>
</html>