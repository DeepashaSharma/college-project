<?php
 include('connection.php');
  /*if(isset($_POST['submit']))
  {	  
	 $slct=$_POST['sl'];
	 
     echo $slct;
	  $sql = mysql_query("SELECT * FROM pbd WHERE Bname='$slct'");
	 
	 while($result = mysql_fetch_array($sql))
	 {
		 echo $result['Bname'];
		 echo $result['Price'];
		 echo $result['Bank'];
		 echo $result['Number'];
		 echo $result['Total'];
		 echo $result['Date'];
	 }
	
	}*/
?>


<html lang="en">
<head>
<title>Blood Bank</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.css"/>
<script src="js/bootstrap.min.js"></script>                         <!--all the above script and style are used for bootstrap---><!--which is used for menu bar-->
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


table {
    border-collapse: collapse;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even)
{
	background-color: #f2f2f2
}
select
{
    border: none;
    border-radius: 4px;
    background-color: lightgreen;
	height:30px;
	width:35%;
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
0%{left:80%; top:0px}
100%{left:80%; top:700px}
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
 
 <img src="Images/163.jpg" align="left" width=200>
  <center><marquee behavior="alternate" width=800><img src="Images/18.jpg" width=500></marquee></center>
  <br><br>

  <div style="overflow-x:auto;">   
  <table align="center" border=1 width=900  height=200>
 <tr>
 <td width=700 background="Images/5.jpg">
  <form action="" method="POST">
       <font size=10px color=green> <center> Available Blood Details</font><br>
	   Blood Name:<select name="sl" required>
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
	                    <input type="submit" value="Search" name="submit" id="submit"></center>
  </form>
 </td>
 <td>
 <marquee direction="up" ><img src="Images/19.jpg"> <br><br><img src="Images/20.jpg"></marquee>
 </td>
</tr>
</table> 
</div>

<br><br><br><br>

<div style="overflow-x:auto;">   
<table border=1 align="center" width=1000>
<tr>
<th>Blood</th><th>Price per unit of blood</th><th>Bank where blood available</th><th>Number of units blood available</th><th>Total cost for blood</th><th>Date when blood received</th>
</tr>
<?php
if(isset($_POST['submit']))
  {	  
	 $slct=$_POST['sl'];
     $sql = mysql_query("SELECT * FROM pbd WHERE Bname='$slct'");
     while($result = mysql_fetch_array($sql))
	 {
?>

<tr>
<th><?php echo $result['Bname']; ?></th>
<th><?php echo $result['Price'];?></th>
<th><?php echo $result['Bank'];?></th>
<th><?php echo $result['Number'];?></th>
<th><?php echo $result['Total'];?></th>
<th><?php echo $result['Date'];?></th>
	 
</tr>
<?php
	 }
  }
  
	 ?>
	 </table>
</div>









<hr style="width:50%; height:10px"/>
</body>
</html>
