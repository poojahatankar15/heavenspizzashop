<?php
$con=mysqli_connect("localhost","root","","heavens_server") or die(mysqli_error());
	  
//get data from html form
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$reason=$_POST['reason'];
$subject=$_POST['subject'];


	  
//Insert values in empInfo table with column name 
$query="INSERT INTO contact(id, firstname, lastname, reason, subject)  VALUES ('', '$firstname','$lastname','$reason','$subject')";
mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
margin:0;
padding:0;
font-family:Times New Roman;
}

a:link
{
    text-decoration: none;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #e41212;;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 30px 25px;
  text-decoration: none;
  font-size:20px;
background-color: #e41212;
}

li a:hover {
  background-color: #e8b93f;
color:black;
}

.footer {
 position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
  text-align:center;
  padding: 2px;
  background-color:#e41212;
  color: white;
}

.a{
font-size:40px;
color:white;
text-align: center;
 padding: 14px 16px;
background-color:#e41212;
}

.edit {
	width:30%;
	height:50%;
	background-color:#1874CD;
	margin-left:35%;
	margin-top:3%;
	border-radius: 25px;
	color:#ffffff;
	
}


.continue {
  border-radius: 15px;
  border-color: white;
  background: white;
  padding: 20px; 
  width: 100px;
  height: 20px; 
  text-decoration:none;
  font-size:25px;
}
	
</style>
</head>
<body>

<ul>
  <li><a href="index.html">Login</a></li>
  <li><a href="feedback.html">Feedback</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="homepage.html">Home</a></li>
<li class="a" style="float:left">&#x1f355; Heaven's Pizza</li>
</ul>

<div class="edit">
<center>
<br><br><br>
<h1> <span style="font-size:40px;">☑️</span> <br>
Thank You For Contacting Us!!</h1>
<br><br><br>
<div class="continue"><a href="homepage.html" style="color:#1874CD;"><b>Continue<b></a></div>
</center>
<br><br><br>
</div>

<div class="footer">
  <p align="right">All rights reserved. Copyright © DNP Food Factory Ltd. &nbsp;&nbsp;</p>
</div>

</body>
</html>
