
<html>


<?php

include("Config.php");
include("nav.html");

$sql = "select * from `route`";
//$result = $mysqli->query($sql);
$result = mysqli_query($db,$sql);
echo "<table border=\"5\" cellpadding=\"10\">";
echo "<tr>";
    
      echo "<td>Route Number</td>";
      echo "<td>Route Description</td>";
      echo "<td>Initial Stop</td>";
       echo "<td>Final Stop</td>";
      echo "<td>Total Stops</td>";
       echo "<td>Fare</td>";
    echo "</tr>";
while ($row=$result->fetch_object()){
  $rt_num = $row->rt_num;
  $rt_descp = $row->rt_descp;
  $in_stop = $row->in_stop;
  $f_stop = $row->f_stop;
  $total_stops = $row->total_stops;
  $fare = $row->fare;
  //echo"$v_nump $v_type $Route_rt_num <br>";
  echo "<tr>";
    
      echo "<td>$rt_num</td>";
      echo "<td>$rt_descp</td>";
      echo "<td>$in_stop</td>";
      echo "<td>$f_stop</td>";
      echo "<td>$total_stops</td>";
      echo "<td>$fare</td>";
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