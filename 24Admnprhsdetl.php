<?php
 include('connection.php');
  if(isset($_POST['submit']))
  {	  
	 $bnam=$_POST['select'];
	 $prce=$_POST['price'];
	 $bb=$_POST['bldbnk'];
	 $nfb=$_POST['nofbtl'];
	 $cst=$_POST['cost'];
	 $dte=$_POST['date'];

	 $sql = mysql_query("INSERT INTO pbd(Bname,Price,Bank,Number,Total,Date) VALUES ('$bnam',' $prce','$bb','$nfb','$cst','$dte')");
	 if($sql)
	 {  
      echo"<script type='text/javascript'>
       alert('Purchase blood details hava been submitted');
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
<script src="js/bootstrap.min.js"></script>          <!--all the above script and style are used for bootstrap---><!--which is used for menu bar-->
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
input[type=password],input[type=date],input[type=text]
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
 <br><br>
 
 <div id=fly> <a href="30Madatry.php"><img src="Images/p1.PNG"></a></div>
 
 <div>
<img src="Images/6.jpg" >
<marquee behavior="alternate"><img src="Images/14.jpg"></marquee><br>
</div>

<div style="overflow-x:auto;">   
<table align="center" border="1" width="1000" height="500">
 <tr>
 <td width="600" background="Images/5.jpg" >
 <center>
  <form action="" method="POST"> 
    <font size=10px color=green>  <center> Blood Purchase Details</center> </font><br>
	  Blood Name:<select id="slct" name="select" required > 
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
	   Price per Bottle: <input type="text" name="price"  placeholder="Enter price per bottle" required><br><br>
	   Blood Bank:       <input type="text" name="bldbnk" placeholder="Enter the blood bank name" required><br><br>
	   Number of Bottles:<input type="text" name="nofbtl" placeholder="Enter the nos. of bottle" required><br><br>
	   Total price:      <input type="text" name="cost"   placeholder="Enter the total price" required><br><br>
	   Purchase date:    <input type="date" name="date" required ><br><br>
	                    <center><input type="submit" value="Submit" name="submit" id="submit"></center>
  </form>
  </center>
 </td>
 <td width="400">
 <marquee direction="up"><img src="Images/55.png"></marquee>
 </td>
</tr>
</table> 
</div>

<hr style="width:50%; height:10px"/>
</body>
</html>

















