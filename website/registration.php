<!DOCTYPE html>

<html>
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
border-radius:5px;
background:#000033;
padding:20px;
width:420px;
margin:auto;
color:#fff;
font-size:16px;
font-family:Verdana;
margin-top:50px;
}
.sign_up h1{
text-align:center;
margin:0;
padding:0;
}
.sign_up input, select{
padding:12px 20px;
margin:8px 0px;
display:inline-block;
border:1px solid #ccc;
border-radius:4px;
box-sizing:border-box;
font-size:17px;
background:black;
color:white;
}
.sign_up input[type=submit]{
width:100%;
border:none;
cursor:pointer;
}
#reg_no{
width: 49%;
}
#name{
width: 49.5%;
}
#email{
width:100%;
}
#password{
width:49.5%;
}
#re_password{
width:49%;
}
#ph_no{
width:49.5%;
}
#fname{
width:49%;
}
input[type=submit]:hover{
background:#45a049;
transition:0.6s;
}
option{
color:white;
background:#000033;
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
<form action = "reg.php" method = "post">
<h1> Registration Form</h1>
<input type ="text" name ="reg_no" id ="reg_no" placeholder ="Enter reg. no" required>
<input type ="text" name ="name" id ="name" placeholder ="Enter your name" required>
<input type ="text" name ="email" id ="email" placeholder ="Enter your email address" required>
<input type ="password" name ="password" id ="password" placeholder ="Enter Portal password" required>
<!--<input type ="password" name ="re_password" id ="re_password" placeholder ="Re-enter password" required>-->
<input type ="text" name ="ph_no" id ="ph_no" placeholder ="Enter phone number" required>
<input type ="text" name ="fname" id ="fname" placeholder ="Enter father's name" required>
<input type ="text" name ="address" id ="address" placeholder ="Enter your address" required>
<select name ="rt_num">
<option>Route</option>
<option value ="1"> G, I, F & H Sectors</option>
<option value ="2"> Laal Kurti,Adiala</option>
<option value ="3"> Falcon Complex,Muslim Town</option>
<option value ="4"> Bahria, DHA</option>
</select> 
<select name ="school">
<option> School</option>
<option value ="SEECS"> SEECS</option>
<option value ="SADA"> SADA</option>
<option value ="S3H"> S3H</option>
<option value ="NBS"> NBS</option>
<option value ="SMME"> SMME</option>
<option value ="IGIS"> IGIS</option>
<option value ="SNS"> SNS</option>
<option value ="NICE"> NICE</option>
<option value ="SCME"> SCME</option>
<option value ="IESE"> IESE</option>
<option value ="ASAB"> ASAB</option>
</select> 
<br>
<input type ="submit" value ="Register">
</div>
</form>
</div>
</body>
</html>
