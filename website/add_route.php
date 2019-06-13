<?php

	// connection
	include("Config.php");
	include("back.html");
	
	// validation 
	$regErr=$nameErr=$EmailErr=$passErr=$phErr=$fnErr=$addErr=$rtErr=$schErr="";
	$reg_no=$name=$email=$password=$ph_no=$fname=$address=$rt_num=$school="";
	$OFF = 1; 
	$ON = 0;
	if ( $_SERVER["REQUEST_METHOD"]== "POST") {	
		if (empty($_POST["rt_num"])) {
				$rt_num = "Route number is required";
				$OFF = 0;
			} 
		 else{
			$rt_num = $_POST["rt_num"];
			$ON = 1;
		}
		
		if(empty($_POST["rt_descp"])){
			$nameErr = "Route Descritption is required";
			$OFF = 0;			
		} else{
			$rt_descp = $_POST["rt_descp"];
			$ON = 1;
		}
		if(empty($_POST["in_stop"])){
			$EmailErr = "Initial stop is required";
			$OFF = 0;
		}else {   
			   $in_stop = $_POST["in_stop"];
				$ON = 1;			   
               
        }
        if(empty($_POST["f_stop"])){
			$passErr = "Final stop is required";
			$OFF = 0;
		} else {   
			   $f_stop = $_POST["f_stop"];
				$ON = 1;			   
               
        }
		if(empty($_POST["total_stops"])){
			$phErr = "Total stops required";
			$OFF = 0;
		}else {
			$total_stops = $_POST["total_stops"];
			$ON = 1;
			
		}
		if(empty($_POST["fare"])){
		$fnErr = "Fare is required";
			$OFF = 0;			
		}
		else {
				$fare = $_POST["fare"];
				$ON = 1;
		}
		

		
		
		
		
		
		
	}
	if($OFF && $ON){
		$sql = 'INSERT INTO route'.
		'(rt_num,rt_descp,in_stop,f_stop,total_stops,fare)'.
		'VALUES ("'."$rt_num".'", "'."$rt_descp".'", "'."$in_stop".'", "'."$f_stop".'", "'."$total_stops".'","'."$fare".'")';

	$retval = mysqli_query($db,$sql);
	
	if (! $retval) {
		echo "<br />Data entered unsuccessfully";
		die('<br />Could not enter the data : '.mysqli_error($db));
	}	else {
		echo "<br />Data entered successfully";
		mysqli_close($db);
	}

	}

?>
<html>
<head>
<title> Add Route</title>
<style>

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
#rt_num{
width: 49%;
}
#rt_descp{
width: 49.5%;
}
#in_stop{
width:100%;
}
#f_stop{
width:49.5%;
}
#total_stops{
width:49%;
}
#fare{
width:49.5%;
}

input[type=submit]:hover{
background:#45a049;
transition:0.6s;
}

</style>
</head>
	<body>

		<div class ="sign_up">
			<form action = "AdminPortal.html" method = "post">
			<h1> Add Route</h1>
			<input type ="text" name ="rt_num" id ="rt_num" placeholder ="Enter Route Number" required>
			<input type ="text" name ="rt_descp" id ="rt_descp" placeholder ="Enter Route Descritption" required>
			<input type ="text" name ="in_stop" id ="in_stop" placeholder ="Enter Initial Stop" required>
			<input type ="text" name ="f_stop" id ="f_stop" placeholder ="Enter Final Stop" required>
			<!--<input type ="password" name ="re_password" id ="re_password" placeholder ="Re-enter password" required>-->
			<input type ="number" name ="total_stops" id ="total_stops" placeholder ="Enter total stops" required>
			<input type ="text" name ="fare" id ="fare" placeholder ="Enter Fare" required>

			<br>
		<a href="AdminPortal.html">	<input type ="submit" value ="Add Route"></a>
			
			</form>
		</div>
	</body>
</html>
