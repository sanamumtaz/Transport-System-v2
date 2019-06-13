<html>
<?php

include("Config.php");
include("nav.html");

$sql = "select * from `driver`";
$result = mysqli_query($db,$sql);
echo "<table border=\"5\" cellpadding=\"10\">";
echo "<tr>";
    
      echo "<td>Diver Name</td>";
      echo "<td>CNIC</td>";
      echo "<td>Phone Number</td>";
       echo "<td>Joining Date</td>";
      echo "<td>Rating</td>";
       echo "<td>Van Number</td>";
    echo "</tr>";
while ($row=$result->fetch_object()){
  $cnic = $row->CNIC;
  $d_name = $row->d_name;
  $ph_no = $row->ph_no;
  $join_date = $row->join_date;
  $rating = $row->rating;
  $v_nump = $row->v_nump;
  //echo"$v_nump $v_type $Route_rt_num <br>";
  echo "<tr>";
    
      echo "<td>$d_name</td>";
      echo "<td>$cnic</td>";
      echo "<td>$ph_no</td>";
      echo "<td>$join_date</td>";
      echo "<td>$rating</td>";
      echo "<td>$v_nump</td>";
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