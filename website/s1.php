<!DOCTYPE html>
<html>
<?php

	// connection
	include("Config.php");
	session_start();
//	$_SESSION['varname'] = $var_value;
	if ( $_SERVER["REQUEST_METHOD"]== "POST") {	
		if(empty($_POST["rt_num"])){
				$nameErr = "Route is required";
				$OFF = 0;			
			} 
		else{
				$rt_num = $_POST["rt_num"];
				$ON = 1;
				//$_SESSION['route'] = $rt_num;

//On page 2

			}
	}
?>
<head>
<title> Registration</title>
<style>
.nav{
width:100%;
background:#000033;
height:70px;
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
background:url(wood.jpg);
background-size:cover;
}
.sign_up{
text-align:center;
border-radius:5px;
background:#000033;
padding:20px;
width:420px;
margin:auto;
color:#fff;
font-size:16px;
font-family:Verdana;
margin-top:50px;
height:200px;
}
.sign_up h1{
text-align:center;
margin:0;
padding:0;
}
.sign_up select{
padding:12px 20px;
margin:8px 0px;
display:inline-block;
border:1px solid #ccc;
border-radius:4px;
box-sizing:border-box;
font-size:17px;
background:black;
color:white;
text-align-last:center;
}
input[type=submit]:hover{
background:#45a049;
transition:0.6s;
width: 20em;  height: 2em;
}
option{
color:white;
background:#000033;
}
.sign_up input[type=submit]{
width:50%;
margin-top:22px;
border:none;
cursor:pointer;
height:35px;
font-weight: 700;
font-size:22px;
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
</div>
<div class ="sign_up">
<form action="registration.php" method="post">
<h1> Select Route</h1>
<select name ="rt_num">
<option>Route</option>
<option value ="1"> G, I, F & H Sectors</option>
<option value ="2"> Laal Kurti,Adiala</option>
<option value ="3"> Falcon Complex,Muslim Town</option>
<option value ="4"> Bahria, DHA</option>
</select> 
<br>
<input type ="submit" value ="Next" href="">
<p><a href ="#"
 onClick=window.open("route_request.php","Ratting","width=400,height=550");>Route not mentioned? Click here</p>
</form>
</div>
</body>
</html>
