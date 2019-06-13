<?php
	// connection
	include("Config.php");
	session_start();
	// validation 
	if ( $_SERVER["REQUEST_METHOD"]== "POST") {
			//	echo('S_POST[username]');
			if($_POST["username"] == "admin"){

				
				$query = "SELECT * from admin where name= '$_POST[username]' ";
			//	echo('S_POST[username]');
				$rs = mysqli_query($db,$query);

	            $row = mysqli_fetch_array($rs,MYSQLI_NUM);
	            $password = $row[1];
	            if($_POST["password"] == $password){
	            	header("location:AdminPortal.php?id=1");
	            }
	            else{
	            	header("location:Portal.php");
	            	echo('S_POST[username]');
	            }


			}

			else{
			$id="";
		
			$userErr=$passErr= "";
			$OFF=1;
			$check = "SELECT password from student where idStudent= '$_POST[username]'";
			$rs = mysqli_query($db,$check);
			$row = mysqli_fetch_array($rs,MYSQLI_NUM);
			echo $row[0];
			if($row[0] == hash_hmac('sha512', 'salt' . $_POST['password'], $_SERVER['site_key'])){
				$id = $_POST["username"];
				$password = $_POST["password"];
			}else{
				$OFF=0;
			}
			if($OFF){
				$_SESSION['login_id'] = $id;
				header("location:stu_portal.php");
				mysqli_close($db);
			}else{
				header("location:AdminPortal.php");
				mysqli_close($db);
			
		   		}
		   	}
	}
?>