<?php
include("Config.php");
if(isset($_GET['v_nump'])){
	$id=$_GET['v_nump'];
	echo $id;
	
	$result = mysqli_query($db, "DELETE FROM van WHERE v_nump=$id");
	mysqli_close($db);
	if ($result == TRUE) {
    echo "Record deleted successfully";
    header("location:delete_van.php");
} else {
    echo "Error deleting record: " . $mysqli->error;
}
}




?>