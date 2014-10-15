<?php

// To print the current time.        
print strftime("%F %T");

// Printing results from table query (output as formatted table)
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