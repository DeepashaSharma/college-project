<?php
  include('connection.php');
  if(isset($_POST['submit']))
  {	  
	 $nam=$_POST['name'];
     $bg=$_POST['bloodg'];
     $ag=$_POST['age']; 
     $gndr=$_POST['gender'];
     $mn=$_POST['mobileno'];
     $rn=$_POST['residenceno'];
     $eml=$_POST['email'];
     $on=$_POST['officeno'];
     $stat=$_POST['state'];
	 $distct=$_POST['district'];
     $cty=$_POST['city'];
     $usrnam=$_POST['username'];
     $pswd=$_POST['password'];
     $cpswd=$_POST['cpassword'];
	 
	$sql = mysql_query("INSERT INTO reg(Name,Blood_group,Age,Gender,Mobile_phone,Residence_phone,Email,
	 Office_phone,State,District,City,Username,Password,
	 Confirm_password) VALUES ('$nam','$bg','$ag','$gndr','$mn','$rn','$eml','$on','$stat','$distct','$cty','$usrnam','$pswd','$cpswd')");
	 if($sql)
	 {  
	  echo "<script type='text/javascript'>
       alert('You are Registered now!!!!!!!!!!');
	   </script>";
	  
	 }
	 else
	 {
		 echo mysql_error();
	 }
  }
	?> 


<html>
<head>
<title>Blood Bank</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.css"/>
<script src="js/bootstrap.min.js"></script>                                 <!--all the above script and style are used for bootstrap---><!--which is used for menu bar-->
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
#main
{
	width:1100px;
}

#one
{
	float:left;
	width:700px;
	height:1000px;
    background-color:66FF99;
	opacity:2;
 	font-family:Times New Roman;
	border-radius:20;
 
}
#two
{
	float:right;
	background-color:66CC00;
	width:calc(100% - 700px);
	height:400px;
    border-radius:20;
}
#submit
{
    background-color:red;
    height:40px;
    width:150px;
    color:white;	
    border: none;
    cursor: pointer;
    border-radius: 15px;
    box-shadow: 0 9px #999;

}
#submit:hover
{
        background-color: #3e8e41;
}
#submit:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#slct
{
	width:200px;
	height:40px;
	border-radius:3px;
}
input[type=text]
{
	width:200px;
	height:26px;
	border-radius:2px;
}
input[type=email]
{
	width:200px;
	height:26px;
	border-radius:2px;
}
input[type=password]
{
	width:200px;
	height:26px;
	border-radius:2px;
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
100%{left:1000px; top:1600px}
}

/*animation for fly the div ends*/

#frst,#sec{
    max-width: 100%;
    height: auto;
} 

</style>
</head>
<body>

<div>
   <center> <img src="Images/2.jpg" height="110" width="800" id="frst"></center>
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
      <center><img src="Images/1.jpg" width="1100" id="sec"></center>
 </div>
<hr/>

<div style="overflow-x:auto;">   
  <center>
   <div id="main">
       <div id="one">
	   <br>
	       <form action="" method="POST">
           <table>
		
		<tr>
		  <td colspan=2><center><img src="Images/21.jpg" width=500 height=100></center></td>
		</tr>
   
		<tr>
          <td><font size=4%> Name</font><br><input type="text" placeholder="Enter the name" name="name" required><br>              <font size=4%>Blood group</font><br><input type="text" placeholder="Enter the blood group" name="bloodg" required></td>
	      <td><font size=4%> Age</font><br><input type="text" placeholder="Enter the age" name="age" required><br> <br>            <font size=4%>Gender</font><br><input type="radio" name="gender" value="male" required><font size=4%>Male</font>
	                                                                                                                                                              <input type="radio" name="gender" value="female" required><font size=4%>Female</font>
	      </td>
		</tr>  
	   
	    <tr>
		  <td  colspan=2><hr></td>
		</tr>
		
		<tr>
		  <td colspan=2><center><font size=6% color=336600>Contact Details</font></center></td>
		</tr>

        <tr>		
          <td><font size=4%>Mobile Phone</font><br><input type="text" placeholder="Enter the Mobile No" name="mobileno" requred><br>     <font size=4%>Residence Phone</font><br><input type="text" placeholder="Enter the Residence No." name="residenceno"></td>
	      <td><font size=4%>Email</font><br><input type="email" placeholder="Enter the Email-Id" name="email" required><br>              <font size=4%>Office Phone</font><br><input type="text" placeholder="Enter the Office No." name="officeno"></td>                     
		</tr>  
	   
	   <tr>
		  <td  colspan=2><hr></td>
		</tr>
		
		
		<tr>
		  <td colspan=2><center><font size=6% color=336600>Location Details</font></center></td>
		</tr>

		 <tr>		
          <td><font size=4%>State</font><br><input type="text" placeholder="Enter the state name" name="state"><br>             <font size=4%>District</font><br><input type="text" placeholder="Enter the district name" name="district"></td>
	      <td><font size=4%>City</font><br><input type="text" placeholder="Enter the city name" name="city" required>                     
		</tr>  
	   
	   <tr>
		  <td  colspan=2><hr></td>
		</tr>
	   
		<tr>
		  <td colspan=2><center><font size=6% color=3366000>Login Details</font></center></td>
		</tr>

		 <tr>		
          <td><font size=4%>Username<br><input type="text" placeholder="Enter the username" name="username" required><br>                <font size=4%>Password</font><br><input type="password" placeholder="Enter the password" name="password" required></td>
	      <td><font size=4%>Confirm Password<br><input type="password" placeholder="Enter for confirm password" name="cpassword" required>                     
		</tr>  
	   
	   <tr>
		  <td  colspan=2><hr></td>
		</tr>
	   
	    <tr>
		<td colspan=2><center><input type="submit" value="Register" name="submit" id="submit"></center></td>
		</tr>
		
	   </table>
	   </form>
	    </div>
		
	   <div id="two">
	      <div>
	     <form action="" method="POST">
	   <h1 style="color:green"><b>FIND A DONOR</b></h1><br>
 &nbsp;&nbsp;
  <select id="slct">
    <option value="">Select Blood Group</option>
    <option  value="A+">A+</option>
	<option  value="A-">A-</option>
    <option  value="B+">B+</option>
    <option  value="B-">B-</option>
    <option  value="O+">O+</option>
    <option  value="O-">O-</option>
	<option  value="AB+">AB+</option>
	<option  value="AB-">AB-</option>
	<option  value="A1+">A1+</option>
	<option  value="A1-">A1-</option>
	<option  value="A2+">A2+</option>
	<option  value="A2-">A2-</option>
	<option  value="A1B+">A1B+</option>
	<option  value="A1B-">A1B-</option>
	<option  value="A2B+">A2B+</option>
	<option  value="A2B-">A2B-</option>
</select><br><br>
  &nbsp;&nbsp;
  <!--<button onclick="window.location.href='19Login.php'" class="btn-block1">SEARCH</button>-->
  <input type="button" value="submit"  id="submit"  onclick="window.location.href='28Patntabd.php'"/>
  </form>
   </div>
   <br><br><br><br><br><br><br><br><br><br><br>
 
 <div>
 <table><tr><td width=300>
<marquee direction="down" height=560 ><img src="Images/50.jpg"></marquee>	
 </td></tr></table>
 </div>
</div> 
</div>
  </center>
</div> 
 <br><br><br><br><br><br>
  
  

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
  
  
<hr style="width:50%; height:10px">
</body>
</html>