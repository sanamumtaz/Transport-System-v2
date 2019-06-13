<html>
<?php

include("Config.php");
include("nav.html");

$sql = "select * from `student`";
$result = mysqli_query($db,$sql);
echo "<table border=\"5\" cellpadding=\"10\">";
echo "<tr>";
    
      echo "<td>Name</td>";
      echo "<td>Id</td>";
       echo "<td>Email</td>";
      echo "<td>Phone Number</td>";
       echo "<td>Father Name</td>";
       echo "<td>Address</td>";
       echo "<td>School</td>";
      echo "<td>Route number</td>";
       echo "<td>Van Number</td>";

    echo "</tr>";
while ($row=$result->fetch_object()){
  $idStudent = $row->idStudent;
  $s_name = $row->s_name;
  $password = $row->password;
  $email = $row->email;
  $ph_no = $row->ph_no;
  $father = $row->father;
  $address = $row->address;
  $school = $row->school;
  $Route_rt_num = $row->Route_rt_num;
  $v_nump = $row->v_nump;
  //echo"$v_nump $v_type $Route_rt_num <br>";
  echo "<tr>";
    
      echo "<td>$s_name</td>";
      echo "<td>$idStudent</td>";
      echo "<td>$email</td>";
      echo "<td>$ph_no</td>";
      echo "<td>$father</td>";
      echo "<td>$address</td>";
      echo "<td>$school</td>";
      echo "<td>$Route_rt_num</td>";
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