<?php
$con=mysqli_connect("localhost","root","","heavens_server") or die(mysqli_error());
	  
//get data from html form
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mnumber'];
$address=$_POST['address'];
$password=$_POST['pass'];
	  
//Insert values in empInfo table with column name 
$query="INSERT INTO registration(id, firstname, lastname, email, mobile, address, password)  VALUES ('', '$firstname','$lastname','$email','$mobile','$address','$password')";
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
	border-top-right-radius: 25px;
	border-top-left-radius: 25px;
	color:#ffffff;
	
}

.edit2 {
	width:30%;
	height:30%;
	background-color:#B0E2FF;
	margin-left:35%;
	margin-bottom:3%;
	border-bottom-right-radius: 25px;
	border-bottom-left-radius: 25px;
	
}

.continue {
  border-radius: 15px;
  background: #1874CD;
  padding: 20px; 
  width: 100px;
  height: 20px; 
  text-decoration:none;
 font-size:20px;
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
Registration Successful</h1>
</center>
<br><br><br>
</div>
<div class="edit2">
<center>
<br><br><br>
<h2>Congratulations, your account <br> has been successfully created.</h2><br>
<div class ="continue"><a href="homepage.html" style="color:#ffffff;">Continue</a></div>
</center>
<br><br><br>
</div>

<div class="footer">
  <p align="right">All rights reserved. Copyright © DNP Food Factory Ltd. &nbsp;&nbsp;</p>
</div>

</body>
</html>
