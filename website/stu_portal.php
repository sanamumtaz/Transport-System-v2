

<!DOCTYPE html>
<?php
    include('Config.php');
    session_start();
    $user_id = $_SESSION['login_id'];
    
    $sql="";
    if(isset($_SESSION['login_id'])){
           $query="SELECT * FROM student WHERE idStudent = '$user_id'";
            $rs = mysqli_query($db,$query);
            $row = mysqli_fetch_array($rs,MYSQLI_NUM);
            $reg_no = $user_id;
            $username = $row[1];
            $email = $row[3];
            $phone = $row[4];
            $route_no =$row[8];
            $van_no = $row[9];
            
            $query1 = "SELECT rt_descp FROM route WHERE rt_num = '$route_no'";
            $rs1 = mysqli_query($db,$query1);
            $row1 = mysqli_fetch_array($rs1,MYSQLI_NUM);
            $route = $row1[0];

            $query2 = "SELECT * FROM driver WHERE v_nump = '$van_no'";
            $rs2 = mysqli_query($db,$query2);
            $row2 = mysqli_fetch_array($rs2,MYSQLI_NUM);
            $driver = $row2[1];
            $driver_cell = $row2[2];
            //mysqli_close($db);
            $_SESSION['route'] = $route;
            $_SESSION['van'] = $van_no;
            $_SESSION['driver'] =$driver;
            
            }
        else{
           header("location:Portal.php");  
        }
    
?>

<html>

<head>
<title> Student's Portal</title>
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
form{
border:1px solid #000033;

height:480px;
margin-top:0px;
background:black;
color:#f1f1f1;
font-size:32px;
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
.container1{
border:1px solid #FF0000;
padding:16px;
background:black;
height:350px;
width:400px;
float:left;
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
<h1>STUDENT'S PORTAL</h1>
</div>
<form>
<div class ="container1">
<label><b>Student's reg. no: <?php echo $reg_no?></b></label><br><br>

<label><b>Student's name:  <?php echo $username?> </b></label><br><br>
<label><b>Email address: <?php echo $email?> </b></label><br><br>
<label><b>Phone no: <?php echo $phone?></b></label><br><br>
</div>
<div class ="container1">
<label><b>Route: <?php echo $route_no?> </b></label><br><br>
<label><b>Van: <?php echo $van_no?></b></label><br><br>
<label><b>Driver: <?php echo $driver?></b></label><br><br>
<label><b>Driver's no: <?php echo $driver_cell?></b></label><br><br>
</div>
<div class ="container1">
<a href="feedback.php"><button type ="button" value="button1">Fill Feedback</button></a>
<br><br>
 <a href="logout.php"><button type ="button" href="" value="button2">Log Out</button></a>
<br>
</div>
</form>
</body>
</html>







