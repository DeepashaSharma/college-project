<html lang="en">
<head>
<title>Blood Bank</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.css"/>
<script src="js/bootstrap.min.js"></script>            <!--all the above script and style are used for bootstrap---><!--which is used for menu bar-->
<link rel="stylesheet" href="w3css/w3.css">            <!--link for using cs animation without net--><!--here it is used for responsive web page design and also for moving text animation -->
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
100%{left:1000px; top:500px}
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
   <center> <img src="Images/2.jpg" height="110" id="one"></center>
</div>


 <table border="0" align="center">
 <tr>
 <td>
 <div id="menu">
   <ul>
      <li><a href="21Admin.php">Home</a></li>
	  <li><a href="24Admnprhsdetl.php">Purchase Blood Details</a></li>
	  <li><a href="25Admcamp.php">Camp</a></li>
	  <li><a href="22Donor.php">Donor</a></li>
	  <li><a href="23Patient.php">Patient</a></li>
	  <li><a href="1Home.php">Logout</a></li>
   </ul>
 </div>
 </td>
 </tr>
 </table>
 

 <div id=fly> <a href="30Madatry.php"><img src="Images/p1.PNG"></a></div>
 
 <div class="w3-container">
 <h1 class="w3-center w3-animate-top"><font code face="Algerian" size="100%" height=100 color="green" >WELCOME TO ADMIN</font></h1>
 </div> 
 
 <div>
  <center><img src="Images/img9.jpg" width=900px height=390px id="two"></center>
 </div> 
 
 <hr style="width:50%; height:40px"/>

</body>
</html>
