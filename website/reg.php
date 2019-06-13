<?php

	// connection
	include("Config.php");
	session_start();
	// validation 
	$regErr=$nameErr=$EmailErr=$passErr=$phErr=$fnErr=$addErr=$rtErr=$schErr="";
	$reg_no=$name=$email=$password=$ph_no=$fname=$address=$rt_num=$school="";
	$OFF = 1; 
	$ON = 0;
	if ( $_SERVER["REQUEST_METHOD"]== "POST") {
		if (empty($_POST["reg_no"])) {
				$regErr = "Registration number is required";
				echo $regErr;
				$OFF = 0;
			} 
		else {	
			$check="SELECT idStudent FROM student WHERE idStudent = '$_POST[reg_no]'";
			$rs = mysqli_query($db,$check);
			$row = mysqli_fetch_array($rs,MYSQLI_NUM);
			if ($row[0])
				{
					$regErr = "User Already  Exists<br/>";
					echo $regErr;
					$OFF = 0;
				}
				else{
					$userErr = "";
					$reg_no =  $_POST["reg_no"];
					$ON = 1;
				}
			}	
		if(empty($_POST["name"])){
			$nameErr = "Name is required";
			echo $regErr;
			$OFF = 0;			
		} else{
			$name = $_POST["name"];
			$ON = 1;
		}
		if(empty($_POST["email"])){
			$EmailErr = "email is required";
			echo $regErr;
			$OFF = 0;
		}else {   
			   $Email = $_POST["email"];
				$ON = 1;			   
               if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                  $EmailErr = "Invalid email format";
                  echo $regErr;
				  $OFF = 0;				  
               }
        }
        if(empty($_POST["password"])){
			$passErr = "Password is required";
			echo $regErr;
			$OFF = 0;
		} else {
			$length = strlen($_POST["password"]);
			if ($length < 6 ){
				$passErr = "The length of the password must be greater than 5";
				echo $regErr;
				$OFF = 0;
			}else{ 
			$passo = $_POST["password"];
			$pass = hash_hmac('sha512', 'salt' . $passo, $_SERVER['site_key']);
			$ON = 1;
			}
		}
		if(empty($_POST["ph_no"])){
			$phErr = "Phone number is required";
			$OFF = 0;
		}else {
			$ph_no = $_POST["ph_no"];
			$ON = 1;
			
		}
		if(empty($_POST["fname"])){
		$fnErr = "Phone number is required";
			$OFF = 0;			
		}
		else {
				$fname = $_POST["fname"];
				$ON = 1;
		}
		if(empty($_POST["address"])){		
		$addErr = "Address is required";
			$OFF = 0;	
		}
		else {
				$address = $_POST["address"];
				$ON = 1;
		}
		if (empty($_POST["rt_num"])) {
				$routeErr = "Route is required";
				$OFF = 0;
			} 
		else {
		$rt_num =  $_POST["rt_num"];	}
			/*$rt_num1 = $_POST["rt_num"];
			$check="SELECT rt_num FROM route WHERE rt_num = '$rt_num'";
			$rs = mysqli_query($db,$check);
			$row = mysqli_fetch_array($rs,MYSQLI_NUM);
			if ($row[0])
				{
					$rt_num =  $_POST["rt_num"];
					$ON = 1;
					
				}
				else{
					
					$rtErr = "Route Doesnt  Exists<br/>";
					$OFF = 0;
				}
			}*/	
		if(empty($_POST["school"])){
		$schErr = "school is required";
			$OFF = 0;			
		}
		else {
				$school = $_POST["school"];
				$ON = 1;
		}

		
		
		
		
		
		
	}
	if($OFF && $ON){
		$query2 = "SELECT * FROM van WHERE Route_rt_num = '$rt_num'";
            $rs2 = mysqli_query($db,$query2);
            $row2 = mysqli_fetch_array($rs2,MYSQLI_NUM);
            $van_no = $row2[0];
		$sql = 'INSERT INTO student'.
		'(idStudent ,s_name ,password ,email ,ph_no ,father ,address,school,Route_rt_num,v_nump)'.
		'VALUES ("'."$reg_no".'", "'."$name".'", "'."$pass".'", "'."$Email".'", "'."$ph_no".'","'."$fname".'","'."$address".'","'."$school".'","'."$rt_num".'","'."$van_no".'")';

	$retval = mysqli_query($db,$sql);
	
	if (! $retval) {
		echo "<br />Data entered unsuccessfully";
		die('<br />Could not enter the data : '.mysqli_error($db));
	}	else {
		echo "<br />Data entered successfully";
		mysqli_close($db);
		header("location:Portal.php");
	}

	}
	else{
		echo $OFF;
		echo "\n";
		echo $ON;
	}

?>