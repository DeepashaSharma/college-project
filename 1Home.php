<?php
  include_once('connection.php');
   if(isset($_POST['submit']))
   {
	  
	   $b=$_POST['uname'];
	   $c=$_POST['psw'];
	   
	   if($b&&$c)
	   {
	   $sql = mysql_query("SELECT * FROM reg WHERE Username='$b' ");
	   $numrows = mysql_num_rows($sql);
	   
	     if($numrows!=0)
		   {
			   while ($row = mysql_fetch_assoc($sql))
			   {
				   $dbusername = $row['Username'];
				   $dbpassword = $row['Password'];
			   }
		    	   if($b==$dbusername&&$c==$dbpassword)
			         {
				       header('location:22Donor.php');
			         }
			        else
			           echo "<script type='text/javascript'>
		                     alert('Incorrect Username OR Password!');
	                        </script>";  
		  }
		     else
			   die("User does not exit or you are not registered!!!!");
	
	   }


 else if($b=='Admin' && $c=='')
{
	header('location:21Admin.php');
}
 else
		   die("Please enter Username or Password");
	   
}
	
	
	
	
	 
	
	
	
	
	
	/*
	// while($result = mysql_fetch_array($sql))
	 {
		  header('location:21Admin.php');
		 /*echo $result['Username'];
		 echo $result['Password'];
		
		 
	 }
	   
	   
	 
	 if($a=='')
	  {
		  echo
  "<script type='text/javascript'>
		  alert('select the option!');
	</script>"	;  
	  }
	   if($a=='Admin' && $b=='Admin' && $c=='')
	   {  
            header('location:21Admin.php');
	   }
	   else if($a=='Donor' && $b!='' && $c!='')
	   {
		    header('location:22Donor.php');
	   }
   
   }



*/

?> 

<html lang="en">
<head>
<title>Blood Bank</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.css"/>
<script src="js/bootstrap.min.js"></script>                    <!--all the above script and style are used for bootstrap---><!--which is used for menu bar-->
<link rel="stylesheet" href="w3css/w3.css">                   <!--link for using cs animation without net--><!--here it is used for responsive web page design--> 
 <script src="js/bootstrap.min.js"></script>  
<style>

/* Full-width input fields */                               
input[type=text], input[type=password] {
    width:50%;
	height:40px;
    padding: 12px 20px;
    margin: 8px 8px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


input[type=text]:focus {
    background-color: lightblue;
	width:55%;
}


input[type=password]:focus {
    background-color: lightblue;
	width:55%;
}

/* Set a css style for all buttons of home page*/
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
	border-radius: 15px;
    box-shadow: 0 9px #999;

}

button:hover 
{
	background-color: #3e8e41; 	 	
}

button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the form and position the close button*/ 
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color:66FF99;
	opacity:0.9;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
 	height:60%;
	}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 10%;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

.cancelbtn {
       width: 20%;
	   	height:17%;
    }

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
         /*css for login ends*/                                                        																  
					




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
.btn-block1
{
	position:absolute;
	height:40px;
	width:120px;
	background-color:red;
	color:white;
	border-radius:10px;
}
#slct
{
	width:200px;
	height:40px;
	border-radius:3px;
}

/*animation for fly the div starts*/                                        /* for animation no other files are required */  

#fly{
    width: 100%;
    height:auot;
    position: relative;
    animation: myfirst 5s infinite;
    animation-direction: alternate;
}


@keyframes myfirst
 {
0%{left:80%; top:0px}
100%{left:80%; top:700px}
}

/*animation for fly the div ends*/

#box
{
 background-color:33CC00;
 height:150; 
}





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

#one{
    max-width: 100%;
    height: auto;
}        


</style>

<title>WOWSlider generated by WOWSlider.com</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="WOW Slider, Page Slider jQuery, Top Slider jQuery" />
	<meta name="description" content="WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<style type="text/css">a#vlb{display:none}</style>
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
</head>
<body>

<div  class="row">      
<div class="col-md-1">
</div>                                          <!-- for responsive table -->
    <div class="col-md-9">
       <center><img src="Images/2.jpg" height="110" width="800" id="one"></center>
	</div>

	<div class="col-md-2">
          <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius:20%">Login</button>
             <div id="id01" class="modal">
             <form class="modal-content animate" action="" method="POST"> 
                    
					<div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div>
                      <center>
					 <font size=4px code face="times new roman">
				    <b>Username</b>
                    <input type="text" placeholder="Enter Username" name="uname"><br>
                    <b>Password</b>
                    <input type="password" placeholder="Enter Password" name="psw"><br>
                    <button type="submit" name="submit">Login</button>
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                      </font>
					  </center>
             </form>
             </div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

   </div>
</div>
<br><br><br><br><br><br>


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
<br><br><br><br><br><br><br><br>

<div>



<br><br><br><br><br><br><br><br>





<!-- Start WOWSlider.com BODY section -->
	<div id="wowslider-container1">
	<div class="ws_images">
<a href="#"><img src="data1/images/51.jpg" alt="51" title="51" id="wows0"/></a>
<a href="#"><img src="data1/images/52.jpg" alt="52" title="52" id="wows1"/></a>
<a href="#"><img src="data1/images/53.jpg" alt="53" title="53" id="wows2"/></a>
<a href="#"><img src="data1/images/img68.jpg" alt="img68" title="img68" id="wows3"/></a>
<a href="#"><img src="data1/images/img63.jpg" alt="img63" title="img63" id="wows4"/></a>
</div>
<div class="ws_bullets"><div>
<a href="#wows0" title="51"><img src="data1/tooltips/51.jpg" alt="51"/>1</a>
<a href="#wows1" title="52"><img src="data1/tooltips/52.jpg" alt="52"/>2</a>
<a href="#wows2" title="53"><img src="data1/tooltips/53.jpg" alt="53"/>3</a>
<a href="#wows3" title="img68"><img src="data1/tooltips/img68.jpg" alt="img68"/>4</a>
<a href="#wows4" title="img63"><img src="data1/tooltips/img63.jpg" alt="img63"/>5</a>
</div></div>
<a style="display:none" href="http://wowslider.com">Carousel Slider jQuery by WOWSlider.com v1.7</a>
	</div>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
</div> 


<div id=fly> <a href="30Madatry.php"><img src="Images/p1.PNG"></a></div>

<center>
<div  class="row">

  <div class="col-md-1">
   </div>
   
  <div id="box" class="col-md-4" >
 <h2 style="color:white">FIND A DONOR</h2><br>
 <form> 
 &nbsp;&nbsp;&nbsp;&nbsp;
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
</select>
  &nbsp;&nbsp;
  <!--<button onclick="window.location.href='19Login.php'" class="btn-block1">SEARCH</button>-->
  <input type="button" value="submit"  class="btn-block1" onclick="window.location.href='28Patntabd.php'"/>
</form>
 </div>
 
 <div id="box" class="col-md-6">
 </div>

 <div class="col-md-1">
 </div>
 </div>
</center>
<br><br>

<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-5" >
    <h2 align="center">HOW TO DONATE BLOOD?</h2><br>
		<p align="justify"><img src="Images/60.jpg" align="left">
	You may please visit a Clinical Laboratory center and identify your blood group.
	The clinical test will cost you 50-60 INR only. The result shall be provided in 2
	hours time. In case you wish to donate blood now itself, visit your nearest Blood Collection
	Center. Or alternatively you may register as donor in Sanjeevani Blood Bank. Recipients or their
	relatives or Hospital authorities will contact you directly<a href="9Dp.php"><font size=5px color="blue"><b><u>..more..</u></b></font></a></p>
</div>
<div class="col-md-5">
    <h2 align="center">DONOR GUIDELINE</h2><br>
	    <p align="justify"><img src="Images/61.jpg" align="left">
	Each second of every day, someone needs blood. You can make the choice to donate by being a 
	volunteer donor to save one's life. Never will there be a substitution for your donation. It 
	takes less than an hour to make a life-giving blood donation. To save life, both donor and recipient
	safety has to be considered. A brief medical check up of you pulse, body iron level, temperature and
	blood pressure are to be done. Donate blood if you are fit to donate<a href="12Whod.php"><font size=5px color="blue"><b><u>..more..</u></b></font></a></p>
</div>
</div>
<br><br>
<hr border=1 border-style:inset;>

<div class="row">   
<div class="col-md-1">
</div>
<div class="col-md-3"> 
        <h2 align="center">Tips on Blood Donation</h2><br>
	  	<p><img src="Images/62.jpg" align="left">
		You are noble but you got to be informed as well...<a href="18Todb.php"><font color="blue"> >> </font> </a> </p>
	  </div>
	  
	  
<div class="col-md-3">
	  <h2 align="center">Blood facts</h2><br>
	  	<p><img src="Images/63.jpg" align="left">
		A whole world in itself, blood is living matter!...<a href="17bf.php"><font color="blue"> >> </font> </a></p>
	  </div>
	  
	 <div class="col-md-4">
	  <h2 align="center">Related Links</h2><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.indianblooddonors.com"><font color="blue">www.indianblooddonors.com</font></a><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.jeevan.org"><font color="blue">www.jeevan.org</font></a><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.blooddonations.org"><font color="blue">www.blooddonations.org</font></a><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.aabb.org"><font color="blue">www.aabb.org</font></a><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.redcross.org"><font color="blue">www.redcross.org</font></a>
</div>
</div>



<hr style="width:50%; height:10px"/>

</body>
</html>
