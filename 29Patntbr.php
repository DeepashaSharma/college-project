<?php
 include('connection.php');
  if(isset($_POST['submit']))
  {	  
	 $nam=$_POST['name'];
	 $blood=$_POST['bg'];
	 $stat=$_POST['state'];
	 $dstct=$_POST['district'];
	 $whn=$_POST['when'];
	 $unt=$_POST['unit'];
	 $eml=$_POST['email'];
	 $phn=$_POST['phone'];
	 $adrs=$_POST['address'];

	 $sql = mysql_query("INSERT INTO bloodreq(Name,Bg,State,District,Date,Units,Email,Phone,Address) VALUES ('$nam',' $blood','$stat','$dstct','$whn','$unt','$eml','$phn','$adrs')");
	 if($sql)
	 {  
      echo"<script type='text/javascript'>
       alert('Required blood details hava been submitted ..........We will try for sending the blood as fast as possible');
	   </script>";
	  //echo "submitted data!!!!!!!!";
	 }
	 else
	 {
		 echo mysql_error();
	 }
  
  }
?>


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
select
{
    border: none;
    border-radius: 4px;
    background-color: lightgreen;
	height:30px;
	width:35%;
}
input[type=date],input[type=text],input[type=email]
{
    background-color: lightgreen;
	width:30%;
	height:30px;
	border-radius: 4px;
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
      <li><a href="23Patient.php">Home</a></li>
	  <li><a href="28Patntabd.php">Available Blood Details</a></li>
	  <li><a href="29Patntbr.php">Blood Required</a></li>
	  <li><a href="1Home.php">Logout</a></li>
   </ul>
 </div>
 </td>
 </tr>
 </table>
 <br><br>
 
  <div id=fly> <a href="30Madatry.php"><img src="Images/p1.PNG"></a></div>
 
 <img src="Images/23.jpg" align="left">
<center><marquee behavior="alternate" width=900><img src="Images/10.jpg" width=500></marquee></center>
<br>

<div style="overflow-x:auto;">   
<table align="center" border=1 width=1000 height=700>
 <tr>
 <td width=600 background="Images/5.jpg">
  <form action="" method="POST">
       <font size=10px color=green> <center> Blood Required Details </font><br><br>
	    <font size=6px color=green>Patient's Information </font><br>
	   Patient Name: <input type="text" name="name" placeholder="Enter patient name" required><br><br>
	   Blood Group:<select name="bg" required>
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
	   State:            <input type="text" name="state" placeholder="Enter state" required><br><br>
	   District:         <input type="text" name="district" placeholder="Enter district" required><br><br>
	   When Required:    <input type="date" name="when" required><br><br>
	   Units Required:   <input type="text" name="unit" placeholder="Enter units required" required><br><br>
	   <hr>
	   <font size=6px color=green>Contact Details</font><br>
	   Email:            <input type="email" name="email" placeholder="Enter email" required><br><br>
	   Phone:            <input type="text" name="phone" placeholder="Enter phone no." required><br><br>
	   Address:          <input type="text" name="address" placeholder="Enter your address" required><br><br>
	                    <input type="submit" value="Submit" name="submit" id="submit"></center>
  </form>
 </td>
 <td><img src="Images/26.png"></td>
</tr>
</table> 
</div>

<hr style="width:50%; height:10px"/>
</body>
</html>
