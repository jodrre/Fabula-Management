<!DOCTYPE html>
<?php
include ("include.php");
$result = mysqli_query($DBconn,"SELECT * FROM users;");
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Person Management</title>
    </head>
    <body>
        
<?php
echo 
"<table border='1'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Phone Number</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['person_FName'] . "</td>";
  echo "<td>" . $row['person_LName'] . "</td>";
  echo "<td>" . $row['person_Phone1'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
        ?>

    </body>
</html>
