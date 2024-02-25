<?php
 include('connection.php');
  /*if(isset($_POST['search']))
  {	  
	 $stat=$_POST['one'];
	 $dstct=$_POST['two'];
     echo $stat;echo $dstct;
	
	 $sql = mysql_query("SELECT * FROM camp WHERE State='$stat'");
	 
	 while($result = mysql_fetch_array($sql))
	 {
		 echo $result['id'];
		 echo $result['State'];
		 echo $result['District'];
		 echo $result['Address'];
		 echo $result['Time'];
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
<script src="js/bootstrap.min.js"></script>            <!--all the above script and style are used for bootstrap---><!--which is used for menu bar-->
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
 
 
 <img src="Images/143.jpg" align="left">
  <marquee behavior="alternate" width=1000><img src="Images/16.png" width=300></marquee>
<br>

<div style="overflow-x:auto;">   
<table align="center" border=1 width=1000 height=250>
 <tr>
 <td width="700" background="Images/5.jpg">
 <center>
  <form action="" method="POST">
    <font size=10px color=green><center>Blood Donation Camps</center></font><br><br>
	    State:  <select id="slct" name="one" >
		                          <option>Select your State</option>
                 				  <option>Andaman Nicobar</option>  
								  <option>Andhra Pradesh</option>
								  <option>Arunachal Pradesh</option>
								  <option>Assam</option>
								  <option>Bihar</option>
								  <option>Chandigarh</option>
								  <option>Chhattisgarh</option>
								  <option>Dadra & Nagar Haveli </option>
								  <option>Daman & Diu</option>
								  <option>Delhi</option>
								  <option>Goa</option>
								  <option>Gujarat</option>
								  <option>Haryana</option>
								  <option>Himachal Pradesh</option>
								  <option>Jammu & Kashmir</option>
								  <option>Jharkhand</option>
								  <option>Karnataka</option>
								  <option>Kerala</option>
								  <option>Lakshdweep</option>
				     			  <option>Madhya Pradesh</option>
					     		  <option>Maharashtra</option>
								  <option>Manipur</option>
						     	  <option>Meghalaya</option>
								  <option>Mizoram</option>
								  <option>Nagaland</option>
								  <option>Orissa</option>
								  <option>Pondicherry</option>
								  <option>Punjab</option>
								  <option>Rajasthan</option>
			     				  <option>Sikkim</option>
								  <option>Tamil Nadu</option>
								  <option>Tripura</option>
								  <option>Uttar Pradesh</option>
							      <option>Uttaranchal</option>
								  <option>West Bengal</option>
                </select><br><br>
	                    <center><input type="submit" value="Search" name="search" id="submit"></center>
  </form>
  </center>
 </td>
 <td>
<marquee direction="up" height="250"> <img src="Images/0.jpg"><br><br><br><br> <img src="Images/168.jpg"> </marquee>
 </td>
 </tr>
</table> 
</div>
<br><br><br><br>


<div style="overflow-x:auto;">   
<table border=1 align="center" width=1000>
<tr>
<th>State</th><th>District</th><th>Address</th><th>Time</th><th>Date</th>
</tr>
<?php
if(isset($_POST['search']))
  {	  
	 $stat=$_POST['one'];
	 $sql = mysql_query("SELECT * FROM camp WHERE State='$stat'");
	 while($result = mysql_fetch_array($sql))
	 {
	?>

<tr>
<th><?php echo $result['State'];?></th>
<th><?php echo $result['District'];?></th>
<th><?php echo $result['Address'];?></th>
<th><?php echo $result['Time'];?></th>
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