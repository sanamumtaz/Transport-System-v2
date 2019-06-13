<html>
<?php

include("Config.php");
include("nav.html");
$sql = "select * from `van`";
$result = mysqli_query($db,$sql);
echo "<table border=\"5\" cellpadding=\"10\">";
echo "<tr>";
    
      echo "<td>Van Number</td>";
      echo "<td>Van Type</td>";
      echo "<td>Route Number</td>";
    echo "</tr>";
while ($row=$result->fetch_object()){
	$v_nump = $row->v_nump;
	$v_type = $row->v_type;
	$Route_rt_num = $row->Route_rt_num;
	//echo"$v_nump $v_type $Route_rt_num <br>";
	echo "<tr>";
    
      echo "<td>$v_nump</td>";
      echo "<td>$v_type</td>";
      echo "<td>$Route_rt_num</td>";
    echo "</tr>";
}
echo "</table>"; 
?>
<head></head>
<body>
  <br>
<a href="AdminPortal.php?id=1"><button type ="button" value="button17">Home</button></a>
<br>
</body>


</html>



