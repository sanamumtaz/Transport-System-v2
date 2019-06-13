<!DOCTYPE html>
<?php  
	 include('Config.php');
	 if($_SERVER["REQUEST_METHOD"]=="POST") {
           			$name = $_POST["name"];
           			$email_address = $_POST["email_address"];
           			$phone = $_POST["ph_no"];
           			$route = $_POST["rt_descp"];	
           			
           			$sql = 'INSERT INTO request'.
		'(name ,email ,ph_no ,route_descp )'.
		'VALUES ("'."$name".'", "'."$email_address".'", "'."$phone".'","'."$route".'")';
					$rs1 = mysqli_query($db,$sql);
			mysqli_close($db);
				echo "<script>window.close();</script>";
			
			}
?>

<html>
<head>
<title>Request Route</title>
<style>
body{
background-image:url('gradient.jpg');
background-size:cover;
background-repeat:no-repeat;
text-align:center;
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
input[type=text]{
width:100%;
padding:8px 0px;
margin:8px 0;
display:inline-block;
border;1px solid #ccc;
box-sizing:border-box;
font-size:20px;
}
</style>
</head>
<body>
<p>If your desired route is not available then, please enter your details to put forward a request.</p>
<br>
<form method="post">
	<label><b>Name</b></label>
	<input type ="text" name ="name" placeholder ="Enter name" required>
	<br>
	<label><b>Email Address</b></label>
	<input type="text" name="email_address" placeholder ="Enter email address" required>
	<br>
	<label><b>Phone Number</b></label>
	<input type="text" name="ph_no" placeholder ="Enter phone no." required>
	<br>
	<label><b>Route Description</b></label>
	<input type ="text" name ="rt_descp" placeholder ="Enter route description" required>
	<br>
	<button type ="submit" value="Submit"> Submit</button>
</form>
<br>
</body>
</html>