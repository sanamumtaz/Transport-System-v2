<!DOCTYPE html>

<?php
	include("Config.php");
	session_start();
	$error ="";
?>
<html>
<head>
<title> Portal</title>
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
background-image:url('wood.jpg');
background-size:cover;
background-repeat:no-repeat;
}
form{
border:1px solid #003333;
text-align:center;
width:500px;
height:535px;
margin-left:auto;
margin-right:auto;
margin-top:10px;
background:#f4dcb7;
color:#f1f1f1;
font-size:20px;
}
input[type=text], input[type=password] {
width:100%;
padding:8px 0px;
margin:8px 0;
display:inline-block;
border;1px solid #ccc;
box-sizing:border-box;
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
.imgcontainer{
text-align:center;
margin:15px 0 12px 0;
height:150px;
}
img.avatar{
width:30%;
}
.container{
padding:16px;
background:#000033;
height:250px;
}
p{
text-align:center;
font-size:20px;
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
	<form action = "login2.php" method = "post">
		<div class ="imgcontainer">
			<img src ="NUST_Vector.svg.png" alt ="Avatar" class ="avatar">
		</div>
		<div class ="container">
		<label><b>Username</b></label>
		<input type ="text" name ="username" id="username" placeholder ="Enter Registration Number" required>
		<br>
		<label><b>Password</b></label>
		<input type="password" name="password" id="password" placeholder ="Enter password" required>
		<br>
		<!--<button type ="button" value="submit" > Login</button>-->
		<input class="radius" type = "submit" value = "Submit "/><br />
		<br>
	    </div>
	<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
	<p><a href ="#" onClick=window.open("password.html","Ratting","width=350,height=250");>Forgot Password?</a></p>
	</form>
</body>
</html>