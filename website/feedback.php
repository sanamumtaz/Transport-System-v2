<!DOCTYPE html>
<html>
<?php
    include('Config.php');
    session_start();
    $user_id = $_SESSION['login_id'];
    
    $sql="";
    if(isset($_SESSION['login_id'])){
           		$route = $_SESSION['route'];
           		$van = $_SESSION['van'];
           		$driver = $_SESSION['driver'];

           		if($_SERVER["REQUEST_METHOD"]=="POST") {
           			$rating= $_POST["rating"];
           			$complaint= $_POST["complaint"];
           			$suggestion= $_POST["suggestion"];

           			$sql = 'INSERT INTO feedback'.
					'(v_nump ,rating ,suggestion ,complaint )'.
					'VALUES ("'."$van".'", "'."$rating".'", "'."$suggestion".'","'."$complaint".'")';
					$rs1 = mysqli_query($db,$sql);
					if (! $rs1) {
						echo "<br />Data entered unsuccessfully";
						die('<br />Could not enter the data : '.mysqli_error($db));
					}
					else{
					mysqli_close($db);
				    header("location:stu_portal.php");
				}
			
			}
            
            }
        else{
           header("location:Portal.php");  
        }
    
?>

<head>
<title>Feedback</title>
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
font-size:22px;
font-family:Verdana;
margin-top:50px;
}
.sign_up h1{
text-align:center;
margin:0;
padding:0;
}
.sign_up input{
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
#sugg{
width:100%;
}
#compt{
width:100%;
}
.sign_up input[type=submit]{
width:100%;
border:none;
cursor:pointer;
}
input[type=submit]:hover{
background:#45a049;
transition:0.6s;
}
</style>
</head>
<body>
<div class ="nav">
<ul>
<li><a href ="home.php"> Home</a></li>
<li><a href ="s1.html"> Registration</a></li>
<li><a href ="contactinfo.html"> Contact Info</a></li>
<li><a href ="Portal.php"> Portal</a></li>
</ul>
</div>
<div class ="sign_up">
	<form method="post">
		<h1>Feedback Form</h1>
		<label><b>Route: <?php echo $route?> </b></label>
		<br>
		<label><b>Van: <?php echo $van?> </b></label><br>
		<label><b>Driver: <?php echo $driver?></b></label>
		<br><br>
		<label><b>Rate Driver:</b></label><br>
		<input type="radio" id="choice1" name="rating" value="1">1
		<input type="radio" id="choice2" name="rating" value="2">2
		<input type="radio" id="choice3" name="rating" value="3">3
		<input type="radio" id="choice4" name="rating" value="4">4
		<input type="radio" id="choice5" name="rating" value="5">5
		<br>
		<input type ="text" name ="complaint" id ="compt" placeholder ="Any complaint?" required>
		<input type ="text" name ="suggestion" id ="sugg" placeholder ="Any suggestion?" required>
		<br>
		<input type ="submit" value ="Submit">
		
	</form>
</div>
</div>
</body>
</html>
