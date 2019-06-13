<?php
if($_GET['id']==1){
	
}
else{
	header("location:Portal.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Admin's Portal</title>
<style>
.nav{
width:100%;
background:#000033;
height:130px;
}
ul li{
float:left;
margin-top:10px;
}

ul li a{
width:300px;
color:white;
display:block;
text-decoration:none;
font-size:18px;
text-align:center;
padding:10px;
border-radius:10px;
font-family:Century Gothic;
font-weight:bold;
}

a:hover{
background:#669900;
}
body{
background-image:url('wood.jpg');
background-size:cover;
background-repeat:no-repeat;
}
.nav h1{
text-align:center;
font-size:60px;
color:white;
margin:0;
}
.container1{
border:1px solid #003333;
padding:16px;
background:black;
height:230px;
width:300px;
float:left;
}
.container4{
border:1px solid #003333;
padding:16px;
background:black;
height:230px;
width:295px;
float:left;
}
.container5{
border:1px solid #003333;
padding:16px;
background:black;
height:181px;
width:300px;
float:left;
}
.container7{
border:1px solid #003333;
padding:16px;
background:black;
height:181px;
width:295px;
float:left;
}
form{
border:1px solid #000033;
text-align:center;
height:480px;
margin-top:0px;
background:black;
color:#f1f1f1;
font-size:20px;
}
button{
background:#669900;
color:white;
padding:14px 20px;
margin:8px 0;
border:none;
cursor:pointer;
width:100%;
font-size:20px;
}
button:hover{
opacity:0.8;
}
</style>
</head>
<body>
<div class ="nav">
<ul>
<li><a href ="home.php"> Home</a></li>
<li><a href ="s1.php"> Registration</a></li>
<li><a href ="contactinfo.html"> Contact Info</a></li>
<li><a href ="Portal.php"> Portal</a></li>
</ul>
<h1>ADMIN'S PORTAL</h1>
</div>
<form>
<div class ="container1">
<label><b>Routes</b></label>
<br>
<a href="view_route_record.php"><button type ="button" value="button1" href="home.html" >View Record</button></a>
<br>
<a href="add_route.php"><button type ="button" value="button2">Add Route</button></a>
<br>
<button type ="button" value="button3">Remove Route</button>
<br>
</div>
<div class ="container1">
<label><b>Vans</b></label>
<br>
<a href="view_van_record.php"><button type ="button" value="button4">View Record</button></a>
<br>
<button type ="button" value="button5">Add Van</button>
<br>
<a href="delete_van.php"><button type ="button" value="button6">Remove Van</button></a>
<br>
</div>
<div class ="container1">
<label><b>Drivers</b></label>
<br>
<a href="view_driver_record.php"><button type ="button" value="button7">View Record</button></a>
<br>
<button type ="button" value="button8">Add Driver</button>
<br>
<button type ="button" value="button9">Remove Driver</button>
<br>
</div>
<div class ="container4">
<label><b>Students</b></label>
<br>
<a href="view_student_record.php"><button type ="button" value="button10">View Record</button></a>
<br>

</div>
<div class ="container5">
<label><b>Route Requests</b></label>
<br>
<button type ="button" value="button13">View Requests</button>
<br>
<button type ="button" value="button14">Delete</button>
<br>
</div>
<div class ="container5">
<label><b>Seat Requests</b></label>
<br>
<button type ="button" value="button15">View Requests</button>
<br>
<button type ="button" value="button16">Delete</button>
<br>
</div>
<div class ="container5">
<label><b>Feedback</b></label>
<br>
<button type ="button" value="button17">View Feedback</button>
<br>
<button type ="button" value="button18">Delete</button>
<br>
</div>
<div class ="container7">
<a href="logout.php"><button type ="button" value="button19">Log Out</button></a>
<br>
</div>
</form>
</body>
</html>